<?php
include("../model/banco.php");
include("../model/model_cliente.php");
include("../view/template.php");

switch (@$_REQUEST["page"]) {
    case "builder":
        include("../view/relatorios/relatorio_builder/relatorio_builder.php");
        break;

    case "by_age_group":
        // Fetch dynamic intervals from the request (from relatorio_builder)
        $intervals = json_decode($_REQUEST["intervals"], true);
        $segments = getAgeGroupSegments($conexao, $intervals);
        include("../view/relatorios/relatorio_clientes_faixa_etaria.php");
        break;

    case "by_address":
        $segments = getAddressSegments($conexao);
        include("../view/relatorios/relatorio_clientes.php");
        break;

    case "by_retention":
        $segments = getRetentionSegments($conexao);
        include("../view/relatorios/relatorio_clientes.php");
        break;

    default:
        include("../view/template.php");
        break;
}
?>
