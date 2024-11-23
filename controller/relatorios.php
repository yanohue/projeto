<?php
include("../model/banco.php");
include("../model/model_cliente.php");
include ("../view/template.php");

switch (@$_REQUEST["page"]) {
    case "builder":
        include("../view/relatorios/relatorio_clientes.php");
        break;

    case "by_activity":
        $sql = "
            SELECT 
                CASE 
                    WHEN DATEDIFF(NOW(), last_purchase_date) <= 30 THEN 'Active (Last 30 Days)'
                    WHEN DATEDIFF(NOW(), last_purchase_date) BETWEEN 31 AND 90 THEN 'Dormant (Last 31-90 Days)'
                    ELSE 'Inactive (Over 90 Days)'
                END AS segment,
                COUNT(*) AS client_count
            FROM (
                SELECT id_cliente, MAX(data) AS last_purchase_date
                FROM venda
                GROUP BY id_cliente
            ) AS recency
            GROUP BY segment;
        ";

        $segments = fetchClientSegments($conexao, $sql);
        include("../view/relatorios/relatorio_clientes.php");
        break;

    case "by_frequency":
        $sql = "
            SELECT 
                CASE 
                    WHEN purchase_count > 20 THEN 'Frequent Buyers'
                    WHEN purchase_count BETWEEN 10 AND 20 THEN 'Moderate Buyers'
                    ELSE 'Occasional Buyers'
                END AS segment,
                COUNT(*) AS client_count
            FROM (
                SELECT id_cliente, COUNT(*) AS purchase_count
                FROM venda
                GROUP BY id_cliente
            ) AS purchases
            GROUP BY segment;
        ";

        $segments = fetchClientSegments($conexao, $sql);
        include("../view/relatorios/relatorio_clientes.php");
        break;

    case "by_age_group":
        $sql = "
            SELECT 
                CASE 
                    WHEN TIMESTAMPDIFF(YEAR, data_nascimento, CURDATE()) BETWEEN 18 AND 24 THEN '18-24'
                    WHEN TIMESTAMPDIFF(YEAR, data_nascimento, CURDATE()) BETWEEN 25 AND 34 THEN '25-34'
                    WHEN TIMESTAMPDIFF(YEAR, data_nascimento, CURDATE()) BETWEEN 35 AND 44 THEN '35-44'
                    ELSE '45+'
                END AS segment,
                COUNT(*) AS client_count
            FROM cliente
            GROUP BY segment;
        ";

        $segments = fetchClientSegments($conexao, $sql);
        include("../view/relatorios/relatorio_clientes.php");
        break;

    case "by_total_spent":
        $sql = "
            SELECT 
                CASE 
                    WHEN total_spent > 5000 THEN 'High Spenders'
                    WHEN total_spent BETWEEN 2000 AND 5000 THEN 'Medium Spenders'
                    ELSE 'Low Spenders'
                END AS segment,
                COUNT(*) AS client_count
            FROM (
                SELECT id_cliente, SUM(valor) AS total_spent
                FROM venda
                GROUP BY id_cliente
            ) AS spending
            GROUP BY segment;
        ";

        $segments = fetchClientSegments($conexao, $sql);
        include("../view/relatorios/relatorio_clientes.php");
        break;

    default:
        include("../view/template.php");
        break;
}
?>
