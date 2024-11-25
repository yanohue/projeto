<div class="container my-5">
        <h1 class="mb-4 text-center">Relatório de Clientes - Por Faixa Etária</h1>

        <?php if (!empty($segments)) { ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Faixa Etária</th>
                            <th>Quantidade de Clientes</th>
                            <th>Frequência Média de Compras</th>
                            <th>Gasto Médio por Compra</th>
                            <th>Score Médio</th>
                            <th>Limite de Crédito Médio</th>
                            <th>Canal de Contato Preferido</th>
                            <th>Gasto Médio Total por Cliente</th>
                            <th>Gasto Total por Faixa Etária</th>
                            <th>Categoria Mais Comprada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($segments as $segment) { ?>
                            <tr>
                                <td><?= htmlspecialchars($segment['age_group']) ?></td>
                                <td><?= htmlspecialchars($segment['quantity']) ?></td>
                                <td><?= number_format($segment['avg_frequency'], 2) ?></td>
                                <td>R$ <?= number_format($segment['avg_spending_per_purchase'], 2, ',', '.') ?></td>
                                <td><?= number_format($segment['avg_score'], 2) ?></td>
                                <td>R$ <?= number_format($segment['avg_credit_limit'], 2, ',', '.') ?></td>
                                <td><?= htmlspecialchars($segment['most_preferred_contact_channel']) ?></td>
                                <td>R$ <?= number_format($segment['avg_total_spent_per_customer'], 2, ',', '.') ?></td>
                                <td>R$ <?= number_format($segment['total_spent_by_age_group'], 2, ',', '.') ?></td>
                                <td><?= htmlspecialchars($segment['most_purchased_category']) ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php } else { ?>
            <div class="alert alert-warning text-center">
                <strong>Não há dados disponíveis para os critérios selecionados.</strong>
            </div>
        <?php } ?>

        <div class="text-center mt-4">
            <a href="../controller/relatorios.php?page=builder" class="btn btn-primary">Voltar ao Criador de Relatórios</a>
        </div>
    </div>