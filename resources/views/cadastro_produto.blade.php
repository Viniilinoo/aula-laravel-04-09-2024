<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar usuario</title>
    <link rel="stylesheet" href="/css/style3.css">
</head>
<body>
        <p class="p">Cadastro de Produto</p>

    <form id="prodform" action="/criar_produto" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao">

        <label for="preco">Preço</label>
        <input type="text" name="preco">

        <input id="btn" type="submit" value="Salvar">
    </form>
</body>
</html>