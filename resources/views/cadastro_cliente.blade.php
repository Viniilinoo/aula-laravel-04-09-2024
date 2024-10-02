<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Cliente</title>
    <link rel="stylesheet" href="/css/style2.css">
</head>
<body>
        <p class="p">Cadastro de Cliente</p>

    <form id="clienform" action="/criar_cliente" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf">

        <label for="email">Email</label>
        <input type="text" name="email">

        <input id="btn" type="submit" value="Salvar">
    </form>
</body>
</html>