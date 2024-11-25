<?php

function fetchClientSegments($conexao, $sql, $params = []) {
    $stmt = $conexao->prepare($sql);
    if (!empty($params)) {
        $types = str_repeat("s", count($params)); // Assume all parameters are strings; adjust types as needed.
        $stmt->bind_param($types, ...$params);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getAgeGroupSegments($conexao, $intervals) {
    $cases = [];
    foreach ($intervals as $index => $interval) {
        $cases[] = sprintf(
            "WHEN TIMESTAMPDIFF(YEAR, data_nascimento, CURDATE()) BETWEEN %d AND %d THEN 'Interval %d: %d-%d'",
            $interval["start"], $interval["end"], $index + 1, $interval["start"], $interval["end"]
        );
    }

    $caseSql = implode(" ", $cases);
    $sql = "
        WITH AgeGroups AS (
            SELECT
                id_cliente,
                CASE
                    $caseSql
                    ELSE 'Other'
                END AS age_group
            FROM cliente
        )
        SELECT
            ag.age_group,
            COUNT(c.id_cliente) as quantity, 
            COUNT(DISTINCT v.id_venda) / COUNT(DISTINCT v.id_cliente) AS avg_frequency,
            AVG(v.valor) AS avg_spending_per_purchase,
            AVG(c.score) AS avg_score,
            AVG(c.limite_credito) AS avg_credit_limit,
            CASE
                WHEN SUM(recebe_whatsapp) >= GREATEST(SUM(recebe_email), SUM(recebe_sms)) THEN 'WhatsApp'
                WHEN SUM(recebe_email) >= GREATEST(SUM(recebe_whatsapp), SUM(recebe_sms)) THEN 'Email'
                ELSE 'SMS'
            END AS most_preferred_contact_channel,
            SUM(v.valor) / COUNT(DISTINCT v.id_cliente) AS avg_total_spent_per_customer,
            SUM(v.valor) AS total_spent_by_age_group,
            (SELECT p.categoria
             FROM itens_venda iv
             JOIN produto p ON iv.id_produto = p.id_produto
             WHERE iv.id_venda = v.id_venda
             GROUP BY p.categoria
             ORDER BY COUNT(*) DESC
             LIMIT 1) AS most_purchased_category
        FROM venda v
        JOIN cliente c ON v.id_cliente = c.id_cliente
        JOIN AgeGroups ag ON c.id_cliente = ag.id_cliente
        GROUP BY ag.age_group;
    ";

    return fetchClientSegments($conexao, $sql);
}

function getAddressSegments($conexao) {
    $sql = "
        SELECT
            e.bairro AS neighborhood,
            COUNT(DISTINCT v.id_cliente) as 'quantity',
            COUNT(DISTINCT v.id_venda) / COUNT(DISTINCT v.id_cliente) AS avg_frequency,
            AVG(v.valor) AS avg_spending_per_purchase,
            AVG(c.score) AS avg_score,
            AVG(c.limite_credito) AS avg_credit_limit,
            SUM(v.valor) / COUNT(DISTINCT v.id_cliente) AS avg_total_spent_per_customer,
            SUM(v.valor) AS total_spent_by_address,
            (SELECT p.categoria
             FROM itens_venda iv
             JOIN produto p ON iv.id_produto = p.id_produto
             WHERE iv.id_venda = v.id_venda
             GROUP BY p.categoria
             ORDER BY COUNT(*) DESC
             LIMIT 1) AS most_purchased_category
        FROM venda v
        JOIN cliente c ON v.id_cliente = c.id_cliente
        JOIN endereco e ON c.id_cliente = e.cliente_id_cliente
        GROUP BY e.bairro;
    ";

    return fetchClientSegments($conexao, $sql);
}

function getRetentionSegments($conexao) {
    $sql = "
        WITH RetentionGroups AS (
            SELECT
                id_cliente,
                CASE
                    WHEN DATEDIFF(CURDATE(), MIN(data)) < 30 THEN 'Less than 1 month'
                    WHEN DATEDIFF(CURDATE(), MIN(data)) BETWEEN 30 AND 180 THEN '1-6 months'
                    WHEN DATEDIFF(CURDATE(), MIN(data)) BETWEEN 181 AND 365 THEN '6-12 months'
                    ELSE '1+ years'
                END AS retention_group
            FROM venda
            GROUP BY id_cliente
        )
        SELECT
            rg.retention_group,
            (SELECT p.categoria
             FROM itens_venda iv
             JOIN produto p ON iv.id_produto = p.id_produto
             WHERE iv.id_venda = v.id_venda
             GROUP BY p.categoria
             ORDER BY COUNT(*) DESC
             LIMIT 1) AS most_purchased_category,
            COUNT(ch.id_chamado) / COUNT(DISTINCT v.id_cliente) AS avg_feedback_calls,
            AVG(v.valor) AS avg_spending_per_purchase,
            AVG(c.score) AS avg_score,
            AVG(c.limite_credito) AS avg_credit_limit
        FROM venda v
        JOIN cliente c ON v.id_cliente = c.id_cliente
        JOIN RetentionGroups rg ON c.id_cliente = rg.id_cliente
        LEFT JOIN chamado ch ON v.id_venda = ch.id_venda
        GROUP BY rg.retention_group;
    ";

    return fetchClientSegments($conexao, $sql);
}

?>
