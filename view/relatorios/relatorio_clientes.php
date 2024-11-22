<div class="container mt-5">
    <h2>Relatório de Segmentação de Clientes</h2>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Segmento</th>
                <th>Quantidade de Clientes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($segments as $segment) : ?>
                <tr>
                    <td><?= $segment['segment'] ?></td>
                    <td><?= $segment['client_count'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>