<?php
include ("../model/banco.php");
include ("../model/model_relatorio.php");
include ("../view/template.php");

switch (@$_REQUEST["page"]) {
    case "vendas":
        include ("../view/relatorio/vendas.php");
        break;

    case "ticket_medio":
        $type_relatorio = "ticket_medio";
        $title_text = "Relatório: Ticket Médio por Cliente";
        include("../view/relatorio/title_relatorio.php");

        include("../view/relatorio/filtro_relatorio.php");

        if (isset($_GET['periodo'])) {
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $limite = 10; // quantidade máxima de registros por página 
            $offset = ($pagina - 1) * $limite;

            $periodo = $_GET['periodo'];
            $dataInicio = getDataInicioPorPeriodo($periodo);

            $totalRegistros = getTotalClientes($conexao, $dataInicio);
            $totalPaginas = ceil($totalRegistros / $limite);

            $dados = getTicketMedioPorCliente($conexao, $limite, $offset, $dataInicio);
            include ("../view/relatorio/ticket_medio.php");
        }
        break;

    case "clientes_potencial_compras":
        $type_relatorio = "clientes_potencial_compras";
        $title_text = "Relatório: Clientes com Maior Potencial";
        include("../view/relatorio/title_relatorio.php");

        include("../view/relatorio/filtro_relatorio.php");

        if (isset($_GET['periodo'])) {
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $limite = 10;
            $offset = ($pagina - 1) * $limite;

            $periodo = $_GET['periodo'];
            $dataInicio = getDataInicioPorPeriodo($periodo);

            $totalRegistros = getTotalClientes($conexao, $dataInicio);
            $totalPaginas = ceil($totalRegistros / $limite); 

            $dados = getClientesComMaiorPotencial($conexao, $limite, $offset, $dataInicio);

            include ("../view/relatorio/clientes_potencial_compras.php");
        }
        break;
    
    case "clientes_mais_compras":
        $type_relatorio = "clientes_mais_compras";
        $title_text = "Relatório: Clientes que Mais Compraram";
        include("../view/relatorio/title_relatorio.php");

        include("../view/relatorio/filtro_relatorio.php");

        if (isset($_GET['periodo'])) {
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $limite = 10;
            $offset = ($pagina - 1) * $limite;

            $periodo = $_GET['periodo'];
            $dataInicio = getDataInicioPorPeriodo($periodo);

            $totalRegistros = getTotalClientes($conexao, $dataInicio);
            $totalPaginas = ceil($totalRegistros / $limite);

            $dados = getClientesQueMaisCompraram($conexao, $limite, $offset, $dataInicio);

            include ("../view/relatorio/clientes_mais_compras.php");
        }
        break;

    case "produtos_mais_compras":
        $type_relatorio = "produtos_mais_compras";
        $title_text = "Relatório: Produtos Mais Vendidos";
        include("../view/relatorio/title_relatorio.php");
        
        include("../view/relatorio/filtro_relatorio.php");

        if (isset($_GET['periodo'])) {
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $limite = 10;
            $offset = ($pagina - 1) * $limite;

            $periodo = $_GET['periodo'];
            $dataInicio = getDataInicioPorPeriodo($periodo);

            $totalRegistros = getTotalProdutos($conexao, $dataInicio);
            $totalPaginas = ceil($totalRegistros / $limite);
            
            $dados = getProdutosMaisVendidos($conexao, $limite, $offset, $dataInicio);
            include ("../view/relatorio/produtos_mais_compras.php");
        }
        break;


    case "ticket_medio_bairro":
        $type_relatorio = "ticket_medio_bairro";
        $title_text = "Relatório: Ticket Médio por Bairro";
        include("../view/relatorio/title_relatorio.php");
    
        include("../view/relatorio/filtro_relatorio.php");
    
        if (isset($_GET['periodo'])) {
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $limite = 10;
            $offset = ($pagina - 1) * $limite;
    
            $periodo = $_GET['periodo'];
            $dataInicio = getDataInicioPorPeriodo($periodo);
    
            $totalRegistros = getTotalBairros($conexao, $dataInicio);
            $totalPaginas = ceil($totalRegistros / $limite);
    
            $dados = getTicketMedioPorBairro($conexao, $limite, $offset, $dataInicio);
            include("../view/relatorio/ticket_medio_bairro.php");
        }
        break;

    default:
        include ("../view/template.php");
        break;
}
?>
