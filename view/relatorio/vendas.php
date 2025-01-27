<?php

?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col p-3">
            <div class="card h-100 text-center">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Ticket Médio por Cliente</h5>
                    <p class="card-text">Calcular o ticket médio das compras por cliente.</p>
                    <a href="../controller/relatorio.php?page=ticket_medio" class="btn btn-primary mt-auto mx-5">Visualizar</a>
                </div>
            </div>
        </div>
        <div class="col p-3">
            <div class="card h-100 text-center">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Clientes com Maior Potencial de Compra</h5>
                    <p class="card-text">Identificar clientes com maior limite de crédito e boa pontuação (score).</p>
                    <a href="../controller/relatorio.php?page=clientes_potencial_compras" class="btn btn-primary mt-auto mx-5">Visualizar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col p-3">
            <div class="card h-100 text-center">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Clientes que Mais Compraram</h5>
                    <p class="card-text">Listar os clientes que mais compraram, ordenando pela quantidade total de vendas.</p>
                    <a href="../controller/relatorio.php?page=clientes_mais_compras" class="btn btn-primary mt-auto mx-5">Visualizar</a>
                </div>
            </div>
        </div>
        <div class="col p-3">
            <div class="card h-100 text-center">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Produtos Mais Vendidos</h5>
                    <p class="card-text">Identificar os produtos mais vendidos com base na quantidade.</p>
                    <a href="../controller/relatorio.php?page=produtos_mais_compras" class="btn btn-primary mt-auto mx-5">Visualizar</a>
                </div>
            </div>
        </div>
    </div>
</div>


