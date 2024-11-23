<!-- Navigation Progress Bar -->
 <div class="container mt-3">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#step1" id="tab-step1">Passo 1: Selecione uma Template</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#step2" id="tab-step2">Passo 2: Configure os Detalhes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#step3" id="tab-step3">Passo 3: Gere o Relatório</a>
        </li>
    </ul>
</div>

<!-- Passo 1: Selecione uma Template -->
<div class="container mt-4" id="step1-content">
    <h3>Selecione uma Template</h3>
    <div class="row">
        <!-- Card Cliente por Faixa Etária -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Cliente por Faixa Etária</h5>
                    <p class="card-text">Analise o comportamento do cliente com base em faixas etárias.</p>
                    <button class="btn btn-primary select-template" data-template="age">Selecionar</button>
                </div>
            </div>
        </div>
        <!-- Card Clientes por Bairro -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Clientes por Bairro</h5>
                    <p class="card-text">Avalie a atividade do cliente por localização.</p>
                    <!-- TODO: Implement all logic and interface Clientes por Bairro -->
                    <button class="btn btn-primary select-template" data-template="address">Selecionar</button>
                </div>
            </div>
        </div>
        <!-- Card Clientes por Retenção -->
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Clientes por Retenção</h5>
                    <p class="card-text">Entenda o que retêm seu cliente após a primeira compra.</p>
                    <!-- TODO: Implement all logic and interface Clientes por Retenção -->
                    <button class="btn btn-primary select-template" data-template="retention">Selecionar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Passo 2: Configure os Detalhes -->
<div class="container mt-4 d-none" id="step2-content">
    <h3>Configure os Detalhes</h3>
    <form id="report-config-form">
        <!-- Segmentation Section -->
        <div class="form-group">
            <label for="segmentation">Intervalos de Faixa Etária:</label>

            <div id="segmentation-intervals">
                <!-- Dynamically Populated Intervals -->
            </div>

            <p class="text-muted">Deixe o último campo em branco para criar um intervalo aberto.</p>

            <button type="button" class="btn btn-sm btn-secondary mt-2" id="add-interval">Adicionar</button>
            <button type="button" class="btn btn-sm btn-danger mt-2" id="remove-interval">Remover</button>
        </div>
        <button type="button" class="btn btn-primary" id="to-step3">Confirmar</button>
    </form>
</div>


<!-- Passo 3: Gere o Relatório -->
<div class="container mt-4 d-none" id="step3-content">
    <h3>Gere o Relatório</h3>

    <!-- Summary of Selection -->
    <div id="segmentation-summary" class="mb-3">
        <p><strong>Template:</strong> Idade</p>
        <p><strong>Intervalos:</strong></p>
        <ul id="interval-summary">
            <!-- Dynamically populated with intervals -->
        </ul>
    </div>

    <!-- Generate Report Button -->
    <!-- TODO: make this button work -->
    <button id="generate-report" class="btn btn-primary mt-3">Gerar Relatório</button>

    <!-- Loading State -->
    <div id="loading-state" class="d-none">
        <p>Gerando relatório, aguarde...</p>
        <div class="spinner-border" role="status">
            <span class="sr-only">Carregando...</span>
        </div>
    </div>

    <!-- View or Download Report -->
    <div id="report-result" class="d-none">
        <h4>Relatório gerado!</h4>
        <p>Seu relatório está pronto!</p>
        <button id="download-report" class="btn btn-success">Download Relatório</button>
        <button id="view-report" class="btn btn-info">Visualizar Relatório</button>
    </div>
</div>

<!-- JavaScript -->
<script>
    // to step 2 event listener
    document.querySelectorAll('.select-template').forEach(button => {
        button.addEventListener('click', (e) => {
            const template = e.target.getAttribute('data-template');

            // Show Step 2
            document.getElementById('step1-content').classList.add('d-none');
            document.getElementById('step2-content').classList.remove('d-none');

            // Activate Tab for Step 2
            document.getElementById('tab-step1').classList.remove('active');
            document.getElementById('tab-step2').classList.remove('disabled');
            document.getElementById('tab-step2').classList.add('active');
            
            // Pre-fill for "Clientes por Faixa Etária" template
            if(template === 'age') {
                populateSegmentationIntervals(['0-20', '21-40', '41']);
            }
        });
    });

    // to step 3 event listener
    document.getElementById('to-step3').addEventListener('click', () => {
        const intervals = Array.from(segmentationContainer.children).map(row => {
            const start = parseInt(row.children[0].value, 10);
            const end = row.children[2].value ? parseInt(row.children[2].value, 10) : null; // Allow blank for last "end"

            return { start, end };
        });

        if(!validateIntervals(intervals)) {
            return;
        }
        // Show Step 3
        document.getElementById('step2-content').classList.add('d-none');
        document.getElementById('step3-content').classList.remove('d-none');

        // Activate Tab for Step 3
        document.getElementById('tab-step2').classList.remove('active');
        document.getElementById('tab-step3').classList.remove('disabled');
        document.getElementById('tab-step3').classList.add('active');

        populateIntervalSummary(null)
    });

    const segmentationContainer = document.getElementById('segmentation-intervals');

    // Populate Intervals
    function populateSegmentationIntervals(intervals) {
        segmentationContainer.innerHTML = ''; // Clear existing intervals
        intervals.forEach(interval => {
            const [start, end] = interval.split('-');
            addIntervalRow(start, end);
        });
    }

    // Add New Interval Row
    function addIntervalRow(start = '', end = '') {
        const row = document.createElement('div');
        row.className = 'd-flex align-items-center mb-2';

        const startField = document.createElement('input');
        startField.type = 'text';
        startField.className = 'form-control mr-2';
        startField.value = start;
        startField.placeholder = 'Início';

        const dash = document.createElement('span');
        dash.textContent = '-';

        const endField = document.createElement('input');
        endField.type = 'text';
        endField.className = 'form-control ml-2';
        endField.value = end;
        endField.placeholder = 'Fim';

        row.appendChild(startField);
        row.appendChild(dash);
        row.appendChild(endField);

        segmentationContainer.appendChild(row);
    }

    // Add Interval Button
    document.getElementById('add-interval').addEventListener('click', () => {
        addIntervalRow();
    });

    // Remove Interval Button
    document.getElementById('remove-interval').addEventListener('click', () => {
        if(segmentationContainer.lastChild) {
            segmentationContainer.removeChild(segmentationContainer.lastChild);
        }
    });

    function validateIntervals(intervals) {

        let message = ''

        if(intervals.length === 0) {
            message = `Nenhum intervalo adicionado! Tente adicionar um antes de prosseguir!`
        }


        for (let i = 0; i < intervals.length; i++) {
            const { start, end } = intervals[i];

            if(start === null || isNaN(start)) {
                message = `O intervalo ${i + 1} tem um valor inicial inválido.`;
            }

            if(i === intervals.length - 1 && end === null) {
                // Last interval with a blank end is valid
                continue;
            }

            if(end === null || isNaN(end)) {
                message = `O intervalo ${i + 1} tem um valor final inválido.`;
            }

            if(start >= end) {
                message = `O intervalo ${i + 1} é inválido. O valor inicial deve ser menor que o valor final.`;
            }

            if(i > 0 && start <= intervals[i - 1].end) {
                // TODO: sometimes the overlap is not being triggered
                message = `O intervalo ${i + 1} se sobrepõe ou está fora de ordem com o intervalo anterior.`;
            }
        }

        if(message) {
            alert(message); // TODO: in some cases the wrong message is diplayed, because we are not failing fast enough
            return false;
        }

        return true;
    }


    // Handle Generate Report Button Click
    document.getElementById('generate-report').addEventListener('click', () => {
        // Show loading state
        document.getElementById('loading-state').classList.remove('d-none');
        document.getElementById('generate-report').disabled = true;

        // Gather intervals and template data for backend processing
        const intervals = Array.from(segmentationContainer.children).map(row => {
            const start = parseInt(row.children[0].value, 10);
            const end = row.children[2].value ? parseInt(row.children[2].value, 10) : null;

            return { start, end };
        });

        const reportData = {
            template: "age", // TODO: Hardcoded for now, this can be dynamic
            intervals: intervals
        };

        // TODO: Mock backend report generation (replace with real call)
        setTimeout(() => {
            // Hide loading state
            document.getElementById('loading-state').classList.add('d-none');

            // Show the result options
            document.getElementById('report-result').classList.remove('d-none');
        }, 2000); // Mocking a 2-second delay for report generation
    });

    // Dynamically populate the interval summary
    function populateIntervalSummary(intervals) {
        if(intervals === null) {
            intervals = Array.from(segmentationContainer.children).map(row => {
                const start = parseInt(row.children[0].value, 10);
                const end = row.children[2].value ? parseInt(row.children[2].value, 10) : null;

                return { start, end };
            });
        }

        const intervalSummary = document.getElementById('interval-summary');
        intervalSummary.innerHTML = "";

        intervals.forEach(interval => {
            const listItem = document.createElement('li');
            const text = interval.end ? `${interval.start} - ${interval.end}` : `${interval.start}+`

            listItem.textContent = text;

            intervalSummary.appendChild(listItem);
        });
    }

</script>