
const buttonCep = document.getElementById('buttonCep');
const botaoBuscaProduto = document.getElementById('botaoBuscaProduto')
const divResultadoBusca = document.getElementById('resultadoBusca');

if (buttonCep){

    buttonCep.addEventListener('click', async (e) => {
        console.log('Devo fazer o fetch para a api do busca cep');
        
        let cepValue = document.getElementById('cep').value;

        if (cepValue === '' || !/^\d+$/.test(cepValue)) {
            alert('Por favor, preencha um CEP válido contendo apenas números.');
            return;
        }

        const data = await fetch('https://viacep.com.br/ws/' + cepValue  + '/json')
        let resp = await data.json()
        console.log(resp);

        // Validar se a resposta contém um resultado
        if (resp.logradouro) {
            
            let address = `${resp.logradouro}, ${resp.complemento} ${resp.bairro} ${resp.localidade} ${resp.uf}`
            document.getElementById('resultadoCep').innerHTML = address;

        } else {
            alert('Não foi possível encontrar informações para o CEP fornecido.');
        }
    })
}

if (botaoBuscaProduto) {
    botaoBuscaProduto.addEventListener('click', async (e) => {
        e.preventDefault()

        // Capturar os valores dos campos de input
        let refProduto = document.getElementById('refProduto').value;
        let nomeProduto = document.getElementById('nomeProduto').value;

        // Validar se o campo ref contém apenas números
        if (refProduto !== '' && !/^\d+$/.test(refProduto)) {
            alert('O campo de referência deve conter apenas números.');
            return;
        }

        // Validar se pelo menos um dos campos está preenchido
        if (refProduto === '' && nomeProduto === '') {
            alert('Preencha pelo menos um dos campos (Referência ou Nome).');
            return;
        }

        // Dar preferência de busca para o id
        if (refProduto){
            nomeProduto = '';
        }

        divResultadoBusca.innerHTML = '';

        const url = `products.php?ref=${refProduto}&name=${encodeURIComponent(nomeProduto)}`;

        try {
            const response = await fetch(url);
            const data = await response.json();

            if (data.length > 0){
                console.log(data);
                data.forEach(createProductDiv);
            }
            else {
                divResultadoBusca.innerHTML = "Nenhum produto encontrado.";
            }

        } catch (error) {
            console.error('Erro ao buscar produtos:', error);
        }
    });
}


function createProductDiv(product) {
    // Criar a div do produto
    const productDiv = document.createElement('div');
    productDiv.classList.add('product');

    // Criar elementos para exibir informações do produto
    const nameElement = document.createElement('p');
    nameElement.textContent = 'Nome: ' + product.name;

    const priceElement = document.createElement('p');
    priceElement.textContent = 'Preço: ' + product.price;

    const providersElement = document.createElement('p');
    providersElement.textContent = 'Fornecedores: ' + product.providers.join(', ');

    // Criar botão para remover a div do produto
    const removeButton = document.createElement('button');
    removeButton.textContent = 'Remover';
    removeButton.addEventListener('click', function() {
        // Remover a div do produto ao clicar no botão
        productDiv.remove();
    });

    // Adicionar elementos à div do produto
    productDiv.appendChild(nameElement);
    productDiv.appendChild(priceElement);
    productDiv.appendChild(providersElement);
    productDiv.appendChild(removeButton);

    // Adicionar a div do produto ao corpo do documento
    divResultadoBusca.appendChild(productDiv);
}