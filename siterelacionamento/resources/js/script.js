<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


    // Função para preencher o campo "Cidade" com base no estado selecionado
    function carregarCidades(uf) {
        // Limpar as opções atuais do campo "Cidade"
        var cidadeSelect = document.getElementById('cidade');
        cidadeSelect.innerHTML = '<option value="">Selecione a Cidade</option>';

        // Fazer a solicitação à API do IBGE para obter as cidades do estado selecionado
        axios.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${uf}/municipios`)
            .then(function (response) {
                var cidades = response.data;

                // Preencher o campo "Cidade" com as opções retornadas pela API
                cidades.forEach(function (cidade) {
                    var option = document.createElement('option');
                    option.value = cidade.nome;
                    option.textContent = cidade.nome;
                    cidadeSelect.appendChild(option);
                });
            })
            .catch(function (error) {
                console.error('Erro ao obter cidades: ' + error);
            });
    }

    // Adicionar um ouvinte de eventos para detectar quando o estado selecionado é alterado
    var estadoSelect = document.getElementById('estado');
    estadoSelect.addEventListener('change', function () {
        var selectedUF = estadoSelect.value;
        if (selectedUF) {
            carregarCidades(selectedUF);
        }
    });

