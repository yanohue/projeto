<div class="container mt-5">

    <h1 class="text-center mb-4">Relatório: Ticket Médio por Cliente</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Ticket Médio</th>
                <th>Quantidade de Compras</th>
                <th>Categoria Mais Comprada</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            for ($i = 0; $i < 10; $i++): // poderiamos trocar o valor 10 usado aqui pelo valor limite usado no controller
                $dado = $dados[$i] ?? null;
            ?>
                <tr>
                    <td><?= $dado ? $dado['nome']                                             : '&nbsp;' ?></td>
                    <td><?= $dado ? 'R$ ' . number_format($dado['ticket_medio'], 2, ',', '.') : '&nbsp;' ?></td>
                    <td><?= $dado ? $dado['quantidade_compras']                               : '&nbsp;' ?></td>
                    <td><?= $dado ? $dado['categoria_mais_comprada']                          : '&nbsp;' ?></td>
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
                            <a class="page-link" href="?page=ticket_medio&periodo=<?= htmlspecialchars($periodo) ?>&pagina=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>

</div>
