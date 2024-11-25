<?php include ("navigation.php") ?>

<!-- Step 1: Template Selection -->
<div class="container mt-4" id="step1-content">
    <h3>Selecione uma Template</h3>
    <div class="row">
        <?php
        $templates = [
            ['id' => 'idade', 'title' => 'Cliente por Faixa Etária', 'description' => 'Analise o comportamento do cliente com base em faixas etárias.'],
            ['id' => 'endereço', 'title' => 'Clientes por Bairro', 'description' => 'Avalie a atividade do cliente por localização.'],
            ['id' => 'retenção', 'title' => 'Clientes por Retenção', 'description' => 'Entenda o que retêm seu cliente após a primeira compra.'],
        ];

        foreach ($templates as $template) {
            echo "
            <div class='col-md-4'>
                <div class='card h-100'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$template['title']}</h5>
                        <p class='card-text'>{$template['description']}</p>
                        <button class='btn btn-primary select-template' data-template='{$template['id']}'>Selecionar</button>
                    </div>
                </div>
            </div>";
        }
        ?>
    </div>
</div>

<!-- Step 2: Configure Details -->
<div class="container mt-4 d-none" id="step2-content">
    <h3>Configure os Detalhes</h3>
    <div id="dynamic-config">
        <!-- Dynamic content based on selected template -->
    </div>
    <button class="btn btn-primary mt-3" id="to-step3">Confirmar</button>
</div>

<!-- Step 3: Generate Report -->
<div class="container mt-4 d-none" id="step3-content">
    <h3>Gere o Relatório</h3>
    <p id="summary">Resumo: Template Selecionado</p>
    <ul id="interval-summary"></ul>
    <button class="btn btn-primary" id="generate-report">Gerar Relatório</button>
</div>


<script>
    $(document).ready(function () {
        let selectedTemplate;

        function goToStep(targetStep) {
            // Hide contents
            $('#step1-content, #step2-content, #step3-content').addClass('d-none');

            // Show target content
            $(`#${targetStep}-content`).removeClass('d-none');

            // Update tabs
            $('.nav-link').removeClass('active');
            $(`#tab-${targetStep}`).addClass('active').removeClass('disabled');
        }

        // Template selection
        $('.select-template').click(function () {
            selectedTemplate = $(this).data('template');
            goToStep('step2');
            loadConfig(selectedTemplate);
        });


        function loadConfig(template) {
            const dynamicConfig = $('#dynamic-config');
            dynamicConfig.empty();

            if (template === 'idade') {
                dynamicConfig.append(`
                    <div class="form-group">
                        <label for="intervals">Intervalos de Faixa Etária:</label>
                        <div id="intervals"></div>
                        <button class="btn btn-sm btn-secondary mt-2" id="add-interval">Adicionar</button>
                        <button class="btn btn-sm btn-danger mt-2" id="remove-interval">Remover</button>
                    </div>
                `);

                addIntervalRow(); // Add the first interval by default

                $('#add-interval').click(() => addIntervalRow());
                $('#remove-interval').click(() => $('#intervals div:last-child').remove());
            } else if (template === 'endereço') {
                dynamicConfig.append('<p>Configuração de Segmentação por Bairro em desenvolvimento.</p>');
            } else if (template === 'retenção') {
                dynamicConfig.append('<p>Configuração de Segmentação por Retenção em desenvolvimento.</p>');
            }
        }

        function addIntervalRow() {
            $('#intervals').append(`
                <div class="d-flex align-items-center mb-2">
                    <input type="text" class="form-control mr-2" name="start[]" placeholder="Início">
                    <span>-</span>
                    <input type="text" class="form-control ml-2" name="end[]" placeholder="Fim">
                </div>
            `);
        }

        $('#to-step3').click(() => {
            $('#step2-content').addClass('d-none');
            $('#step3-content').removeClass('d-none');
            $('#tab-step2').removeClass('active');
            $('#tab-step3').addClass('active').removeClass('disabled');

            // Example: Populate summary dynamically
            $('#summary').text(`Resumo: Template Selecionado - ${selectedTemplate}`);
            $('#interval-summary').empty();
            $('#intervals input').each(function () {
                $('#interval-summary').append(`<li>${$(this).val()}</li>`);
            });
        });
        
        function submitForm() {
            const startAges = Array.from(document.querySelectorAll('input[name="start[]"]')).map(input => parseInt(input.value));
            const endAges = Array.from(document.querySelectorAll('input[name="end[]"]')).map(input => parseInt(input.value));

            const intervals = startAges.map((start, index) => ({
                start: start,
                end: endAges[index]
            }));

            const form = document.createElement('form');
            form.method = 'GET';
            form.action = '../controller/relatorios.php';

            const intervalsInput = document.createElement('input');
            intervalsInput.type = 'hidden';
            intervalsInput.name = 'intervals';
            intervalsInput.value = JSON.stringify(intervals);
            form.appendChild(intervalsInput);

            const pageInput = document.createElement('input');
            pageInput.type = 'hidden';
            pageInput.name = 'page';
            pageInput.value = 'by_age_group';
            form.appendChild(pageInput);

            console.log(form);
            

            document.body.appendChild(form);
            form.submit();
        }

        $('#generate-report').click(() => submitForm());
    });
</script>