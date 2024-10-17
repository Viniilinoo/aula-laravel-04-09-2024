<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Usuários</title>
</head>
<body>
  @if ($produtos->isEmpty())
    <h1>produto não encontrado</h1>
  @else
    <table border="1">
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>Ações</th>
      </tr>
      @foreach ($clientes as $cliente)
      <tr>
        <td>{{ $cliente->name }}</td>
        <td>{{ $cliente->cpf }}</td>
        <td>{{ $cliente->email }}</td>
        <td>
          <form method="POST" action="/deletar_cliente/{{$cliente->id}}">
            <a href="/editar_cliente/{{$cliente->id}}">Editar</a>
            @csrf
            {{ method_field("DELETE") }}
            <input type="submit" value="Deletar Cliente">
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  @endif
</body>
</html>