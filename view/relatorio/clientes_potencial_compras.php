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
        <?php foreach ($dados as $dado): ?>
            <tr>
                <td><?= htmlspecialchars($dado['nome']) ?></td>
                <td>R$ <?= number_format($dado['limite_credito'], 2, ',', '.') ?></td>
                <td><?= $dado['score'] ?></td>
                <td><?= htmlspecialchars($dado['cidade']) ?></td>
                <td><?= $dado['quantidade_compras'] ?></td>
                <td><?= htmlspecialchars($dado['canal_comunicacao']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>