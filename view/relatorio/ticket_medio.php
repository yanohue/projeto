<div class="row justify-content-center text-center">
    <div class="col-12 mb-4">
        <h1>Relatório: Ticket Médio por Cliente</h1>
    </div>
    
    <div class="col-8">
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
                <?php foreach ($dados as $dado): ?>
                <tr>
                    <td><?= htmlspecialchars($dado['nome']) ?></td>
                    <td>R$ <?= number_format($dado['ticket_medio'], 2, ',', '.') ?></td>
                    <td><?= number_format($dado['quantidade_compras'], 2, ',', '.') ?></td>
                    <td><?= htmlspecialchars($dado['categoria_mais_comprada']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
