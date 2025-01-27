<?php
include ("../model/banco.php");
include ("../model/model_relatorio.php");
include ("../view/template.php");

switch (@$_REQUEST["page"]) {
    case "vendas":
        include ("../view/relatorio/vendas.php");
        break;

    case "ticket_medio":
        include("../view/relatorio/filtro_relatorio.php");

        if (isset($_GET['periodo'])) {
            $periodo = $_GET['periodo'];

            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $limite = 10; // quantidade máxima de registros por página 
            $offset = ($pagina - 1) * $limite;

            $totalRegistros = getTotalClientes($conexao);
            $totalPaginas = ceil($totalRegistros / $limite);

            $dados = getTicketMedioPorCliente($conexao, $limite, $offset, $periodo);
            include ("../view/relatorio/ticket_medio.php");
        }
        break;

    case "clientes_potencial_compras":
        $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
        $limite = 10;
        $offset = ($pagina - 1) * $limite;

        $totalRegistros = getTotalClientes($conexao);
        $totalPaginas = ceil($totalRegistros / $limite); 

        $dados = getClientesComMaiorPotencial($conexao, $limite, $offset);

        include ("../view/relatorio/clientes_potencial_compras.php");
        break;
    
    case "clientes_mais_compras":
        $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
        $limite = 10;
        $offset = ($pagina - 1) * $limite;

        $totalRegistros = getTotalClientes($conexao);
        $totalPaginas = ceil($totalRegistros / $limite);

        $dados = getClientesQueMaisCompraram($conexao, $limite, $offset);

        include ("../view/relatorio/clientes_mais_compras.php");
        break;

    case "produtos_mais_compras":
        $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
        $limite = 10;
        $offset = ($pagina - 1) * $limite;

        $totalRegistros = getTotalProdutos($conexao);
        $totalPaginas = ceil($totalRegistros / $limite);
        
        $dados = getProdutosMaisVendidos($conexao, $limite, $offset);
        include ("../view/relatorio/produtos_mais_compras.php");
        break;

    default:
        include ("../view/template.php");
        break;
}
?>
