<div class="container mt-2">

    <h5 class="text-center mb-4">Desde <?= htmlspecialchars($periodo . " - " . date('d/m/Y', strtotime($dataInicio))) ?> </h5>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Cliente</th>
            <th>Limite de Crédito</th>
            <th>Score</th>
            <th>Cidade</th>
            <th>Quantidade de Compras</th>
            <th>Canal de Comunicação</th>
        </tr>
        </thead>
        <tbody>
            <?php 
            for ($i = 0; $i < 10; $i++):
                $dado = $dados[$i] ?? null; 
            ?>
                <tr>
                    <td class="p-2"><?= $dado ? $dado['nome']                                               : '&nbsp;' ?></td>
                    <td class="p-2"><?= $dado ? 'R$ ' . number_format($dado['limite_credito'], 2, ',', '.') : '&nbsp;' ?></td>
                    <td class="p-2"><?= $dado ? $dado['score']                                              : '&nbsp;' ?></td>
                    <td class="p-2"><?= $dado ? $dado['cidade']                                             : '&nbsp;' ?></td>
                    <td class="p-2"><?= $dado ? $dado['quantidade_compras']                                 : '&nbsp;' ?></td>
                    <td class="p-2"><?= $dado ? $dado['canal_comunicacao']                                  : '&nbsp;' ?></td>
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
                            <a class="page-link" href="?page=clientes_potencial_compras&periodo=<?= htmlspecialchars($periodo) ?>&pagina=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>

</div>