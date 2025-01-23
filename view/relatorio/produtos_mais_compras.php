<div class="container mt-5">
    <h1 class="text-center mb-4">Relatório: Produtos Mais Vendidos</h1>
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
        <?php foreach ($dados as $dado): ?>
            <tr>
                <td><?= htmlspecialchars($dado['nome']) ?></td>
                <td><?= $dado['quantidade_vendida'] ?></td>
                <td>R$ <?= number_format($dado['receita_gerada'], 2, ',', '.') ?></td>
                <td>R$ <?= number_format($dado['desconto_medio'], 2, ',', '.') ?></td>
                <td><?= $dado['quantidade_estoque'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>