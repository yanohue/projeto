<?php
include ("../model/banco.php");
include ("../model/model_relatorio.php");
include ("../view/template.php");

switch (@$_REQUEST["page"]) {
    case "vendas":
        include ("../view/relatorio/vendas.php");
        break;

    case "ticket_medio":
        $dados = getTicketMedioPorCliente($conexao);
        include ("../view/relatorio/ticket_medio.php");
        break;

    case "clientes_potencial_compras":
        $dados = getClientesComMaiorPotencial($conexao);
        include ("../view/relatorio/clientes_potencial_compras.php");
        break;
    
    case "clientes_mais_compras":
        $dados = getClientesQueMaisCompraram($conexao);
        include ("../view/relatorio/clientes_mais_compras.php");
        break;

    case "produtos_mais_compras":
        $dados = getProdutosMaisVendidos($conexao);
        include ("../view/relatorio/produtos_mais_compras.php");
        break;

    default:
        include ("../view/template.php");
        break;
}
?>
