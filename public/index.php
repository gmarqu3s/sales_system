<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title >Sistema de Vendas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <h1 class="p-3 mb-2 bg-primary text-white">Sistema de Vendas
        <h2 class="col-lg-p-3 mb-2 bg-primary text-white"> Bem-vindo!</h2>
    </h1>

    <form id="buscarProdutoForm">
        <label for="nomeProduto" class="form-label" >Nome do Produto:</label>
        <input type="text" class="form-control" id="nomeProduto" name="nomeProduto">

        <label for="refProduto" class="form-label" >Número de Referência (ID do Produto):</label>
        <input type="text" class="form-control" id="refProduto" name="refProduto">

        <input type="submit" class="btn btn-outline-primary" id="botaoBuscaProduto" value="Buscar">
    </form>

    <div class="border border-primary" id="resultadoBusca"></div>

    <hr>

    <h2 class="p-3 mb-2 bg-primary text-white">Local de Entrega</h2>
    <label for="cep" class="form-label">CEP:</label>
    <input type="text" class="form-control" id="cep" name="cep">
    <div class="border border-primary" id="resultadoCep"></div>

    <button type="button" class="btn btn-outline-primary" id="buttonCep">Buscar cep</button>    <button id="btn-add-product" onclick="adicionarProduto()" class="btn btn-outline-primary" >Adicionar Produto</button>





    <hr>

    <h2 class="p-3 mb-2 bg-primary text-white">Vendas</h2>
    <p>Total: <span id="totalVendas">0.00</span></p>

    <table class="table table-striped">
        <thead>
            <tr class="table-primary">
                <th Nome="col">Nome</th>
                <th Preco="col">Preço</th>
                <th Fornecedores="col">Fornecedores</th>
            </tr>
        </thead>
        <tbody id="tabelaVendasBody">
            <!-- Aqui serão adicionadas as linhas da tabela dinamicamente -->
            <tr>
                <th Nome>Acer</th>
                <td Preco="2">100.00</td>
                <td Fornecedores>Rua Zeca, Vila Engenho Novo Barueri SP</td>
            </tr>
        </tbody>
    </table>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
