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
        <?php foreach ($dados as $dado): ?>
            <tr>
                <td><?= htmlspecialchars($dado['nome']) ?></td>
                <td>R$ <?= number_format($dado['total_compras'], 2, ',', '.') ?></td>
                <td><?= htmlspecialchars($dado['produto_mais_comprado']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>