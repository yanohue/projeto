<?php

function getTicketMedioPorCliente($conexao) {
    $sql = "SELECT 
        c.nome, 
        AVG(v.valor) AS ticket_medio, 
        COUNT(DISTINCT(v.id_venda)) AS quantidade_compras,
        p.categoria AS categoria_mais_comprada
    FROM cliente c
    JOIN venda v ON c.id_cliente = v.id_cliente
    JOIN itens_venda iv ON v.id_venda = iv.id_venda
    JOIN produto p ON iv.id_produto = p.id_produto
    GROUP BY c.id_cliente
    ORDER BY ticket_medio DESC";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    $dados = [];
    while ($row = $result->fetch_assoc()) {
        $dados[] = $row;
    }

    return $dados;
}

function getClientesComMaiorPotencial($conexao) {
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
    JOIN venda v ON c.id_cliente = v.id_cliente
    WHERE c.score >= 600
    GROUP BY c.id_cliente
    ORDER BY c.limite_credito DESC";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    $dados = [];
    while ($row = $result->fetch_assoc()) {
        $dados[] = $row;
    }

    return $dados;
}

function getProdutosMaisVendidos($conexao) {
    $sql = "SELECT 
        p.nome, 
       COUNT(iv.id_produto) AS quantidade_vendida, 
       SUM(iv.desconto_item + p.valor) AS receita_gerada,
       AVG(iv.desconto_item) AS desconto_medio,
       p.quantidade_estoque
    FROM produto p
    JOIN itens_venda iv ON p.id_produto = iv.id_produto
    GROUP BY p.id_produto
    ORDER BY quantidade_vendida DESC";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    $dados = [];
    while ($row = $result->fetch_assoc()) {
        $dados[] = $row;
    }

    return $dados;
}

function getClientesQueMaisCompraram($conexao) {
    $sql = "SELECT 
        c.nome, 
        SUM(v.valor) AS total_compras,
        p.nome AS produto_mais_comprado
    FROM cliente c
    JOIN venda v ON c.id_cliente = v.id_cliente
    JOIN itens_venda iv ON v.id_venda = iv.id_venda
    JOIN produto p ON iv.id_produto = p.id_produto
    GROUP BY c.id_cliente
    ORDER BY total_compras DESC";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    $dados = [];
    while ($row = $result->fetch_assoc()) {
        $dados[] = $row;
    }

    return $dados;
}

?>