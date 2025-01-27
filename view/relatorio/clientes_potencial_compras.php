<div class="container mt-5">

    <h1 class="text-center mb-4">Relatório: Clientes com Maior Potencial</h1>
    
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
                    <td><?= $dado ? $dado['nome']                                               : '&nbsp;' ?></td>
                    <td><?= $dado ? 'R$ ' . number_format($dado['limite_credito'], 2, ',', '.') : '&nbsp;' ?></td>
                    <td><?= $dado ? $dado['score']                                              : '&nbsp;' ?></td>
                    <td><?= $dado ? $dado['cidade']                                             : '&nbsp;' ?></td>
                    <td><?= $dado ? $dado['quantidade_compras']                                 : '&nbsp;' ?></td>
                    <td><?= $dado ? $dado['canal_comunicacao']                                  : '&nbsp;' ?></td>
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
                            <a class="page-link" href="?page=clientes_potencial_compras&pagina=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>

</div>