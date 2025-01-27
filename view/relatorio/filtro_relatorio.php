<div class="container mt-5 col-3">

    <form method="GET" action="">
        <div class="card mb-3">
            <div class="card-header">
                Filtros de Relatório
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="hidden" name="page" value="ticket_medio">
                    <label for="periodo">Período</label>
                    <select name="periodo" id="periodo" class="form-control">
                        <option value="hoje">Hoje</option>
                        <option value="ultima_semana">Última Semana</option>
                        <option value="ultimo_mes">Último Mês</option>
                        <option value="tres_meses">Últimos 3 Meses</option>
                        <option value="seis_meses">Últimos 6 Meses</option>
                        <option value="ultimo_ano">Último Ano</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Gerar Relatório</button>
            </div>
        </div>
    </form>

</div>