<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
</head>
<body>
<form id="prodform" action="/editar_produto/{{$produto->id}}" method="post">
        @csrf
        {{ method_field("PATCH") }}
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{$produto->nome}}">

        <label for="descricao">Descricão</label>
        <input type="text" name="descricao" value="{{$produto->descricao}}">

        <label for="preco">Preco</label>
        <input type="text" name="preco" value="{{$produto->preco}}">

        <input id="btn" type="submit" value="Salvar">
    </form>
</body>
</html>