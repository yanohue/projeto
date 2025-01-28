<div class="container mt-2">

    <h5 class="text-center mb-4">Desde <?= htmlspecialchars($periodo . " - " . date('d/m/Y', strtotime($dataInicio))) ?> </h5>
    
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Produto</th>
            <th>Quantidade Vendida</th>
            <th>Receita Gerada</th> 
            <th>Desconto Médio</th>
            <th>Quantidade em Estoque</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        for ($i = 0; $i < 10; $i++):
            $dado = $dados[$i] ?? null;
        ?>
            <tr>
                <td class="p-2"><?= $dado ? $dado['nome']                                               : '&nbsp;' ?></td>
                <td class="p-2"><?= $dado ? $dado['quantidade_vendida']                                 : '&nbsp;' ?></td>
                <td class="p-2"><?= $dado ? 'R$ ' . number_format($dado['receita_gerada'], 2, ',', '.') : '&nbsp;' ?></td>
                <td class="p-2"><?= $dado ? 'R$ ' . number_format($dado['desconto_medio'], 2, ',', '.') : '&nbsp;' ?></td>
                <td class="p-2"><?= $dado ? $dado['quantidade_estoque']                                 : '&nbsp;' ?></td>
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
                            <a class="page-link" href="?page=produtos_mais_compras&periodo=<?= htmlspecialchars($periodo) ?>&pagina=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>

</div>