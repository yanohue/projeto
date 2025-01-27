<?php

function getTicketMedioPorCliente($conexao, $limite = 10, $offset = 0, $periodo = null) {
    $sql = "SELECT 
        c.nome, 
        AVG(v.valor) AS ticket_medio, 
        COUNT(DISTINCT(v.id_venda)) AS quantidade_compras,
        p.categoria AS categoria_mais_comprada
    FROM cliente c
    LEFT JOIN venda v ON c.id_cliente = v.id_cliente
    JOIN itens_venda iv ON v.id_venda = iv.id_venda
    JOIN produto p ON iv.id_produto = p.id_produto
    WHERE v.data >= ?
    GROUP BY c.id_cliente
    ORDER BY ticket_medio DESC
    LIMIT ? OFFSET ?";

    $dataInicio = getDataInicioPorPeriodo($periodo);

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('sii', $dataInicio, $limite, $offset);
    $stmt->execute();
    $result = $stmt->get_result();

    $dados = [];
    while ($row = $result->fetch_assoc()) {
        $dados[] = $row;
    }

    return $dados;
}

function getClientesComMaiorPotencial($conexao, $limite = 10, $offset = 0) {
    $sql = "SELECT 
        c.nome, 
        c.limite_credito, 
        c.score, 
        e.cidade, 
        COUNT(v.id_venda) AS quantidade_compras,
        CASE 
            WHEN c.recebe_whatsapp = 1 THEN 'WhatsApp'
            WHEN c.recebe_email = 1 THEN 'E-mail'
            WHEN c.recebe_sms = 1 THEN 'SMS'
            ELSE 'Nenhum Canal'
        END AS canal_comunicacao
    FROM cliente c
    JOIN endereco e ON c.id_cliente = e.cliente_id_cliente
    LEFT JOIN venda v ON c.id_cliente = v.id_cliente
    WHERE c.score >= 600
    GROUP BY c.id_cliente
    ORDER BY c.limite_credito DESC
    LIMIT ? OFFSET ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('ii', $limite, $offset);
    $stmt->execute();
    $result = $stmt->get_result();

    $dados = [];
    while ($row = $result->fetch_assoc()) {
        $dados[] = $row;
    }

    return $dados;
}

function getProdutosMaisVendidos($conexao, $limite = 10, $offset = 0) {
    $sql = "SELECT 
        p.nome, 
       COUNT(iv.id_produto) AS quantidade_vendida, 
       SUM(iv.desconto_item + p.valor) AS receita_gerada,
       AVG(iv.desconto_item) AS desconto_medio,
       p.quantidade_estoque
    FROM produto p
    LEFT JOIN itens_venda iv ON p.id_produto = iv.id_produto
    GROUP BY p.id_produto
    ORDER BY quantidade_vendida DESC
    LIMIT ? OFFSET ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('ii', $limite, $offset);
    $stmt->execute();
    $result = $stmt->get_result();

    $dados = [];
    while ($row = $result->fetch_assoc()) {
        $dados[] = $row;
    }

    return $dados;
}

function getClientesQueMaisCompraram($conexao, $limite = 10, $offset = 0) {
    $sql = "SELECT 
        c.nome, 
        SUM(v.valor) AS total_compras,
        p.nome AS produto_mais_comprado
    FROM cliente c
    LEFT JOIN venda v ON c.id_cliente = v.id_cliente
    JOIN itens_venda iv ON v.id_venda = iv.id_venda
    JOIN produto p ON iv.id_produto = p.id_produto
    GROUP BY c.id_cliente
    ORDER BY total_compras DESC
    LIMIT ? OFFSET ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('ii', $limite, $offset);
    $stmt->execute();
    $result = $stmt->get_result();

    $dados = [];
    while ($row = $result->fetch_assoc()) {
        $dados[] = $row;
    }

    return $dados;
}

?>