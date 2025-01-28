<div class="container mt-2">

    <h5 class="text-center mb-4">Desde <?= htmlspecialchars($periodo . " - " . date('d/m/Y', strtotime($dataInicio))) ?> </h5>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Bairro</th>
                <th>Ticket Médio</th>
                <th>Quantidade de Compras</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            for ($i = 0; $i < 10; $i++):
                $dado = $dados[$i] ?? null;
            ?>
                <tr>
                    <td class="p-2"><?= $dado ? $dado['bairro']                                           : '&nbsp;' ?></td>
                    <td class="p-2"><?= $dado ? 'R$ ' . number_format($dado['ticket_medio'], 2, ',', '.') : '&nbsp;' ?></td>
                    <td class="p-2"><?= $dado ? $dado['quantidade_compras']                               : '&nbsp;' ?></td>
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
                            <a class="page-link" href="?page=ticket_medio_bairro&periodo=<?= htmlspecialchars($periodo) ?>&pagina=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>

</div>
