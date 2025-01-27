<div class="container mt-5">

    <h1 class="text-center mb-4">Relatório: Clientes que Mais Compraram</h1>
    
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Cliente</th>
            <th>Total de Compras</th>
            <th>Produto Mais Comprado</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        for ($i = 0; $i < 10; $i++):
            $dado = $dados[$i] ?? null;
        ?>
            <tr>
                <td><?= $dado ? $dado['nome']                                               : '&nbsp;' ?></td>
                <td><?= $dado ? 'R$ ' . number_format($dado['total_compras'], 2, ',', '.')  : '&nbsp;' ?></td>
                <td><?= $dado ? $dado['produto_mais_comprado']                              : '&nbsp;' ?></td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>

    <div class="row justify-content-center">
        <div class="col-8">
            <nav>
                <ul class="pagination justify-content-center">
                    <?php for ($i = 1; $i <= $totalPaginas; $i++): ?>
                        <li class="page-item <?= $i == $pagina ? 'active' : '' ?>">
                            <a class="page-link" href="?page=clientes_mais_compras&pagina=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>

</div>