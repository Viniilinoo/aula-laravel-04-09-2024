<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Usuários</title>
</head>
<body>
  @if ($montadora->isEmpty())
    <h1>montadora não encontrado</h1>
  @else
    <table border="1">
      <tr>
        <th>Nome</th>
        <th>NomeDoCarro</th>
        <th>Dt Venda</th>
        <th>Dt Entrega</th>
        <th>Preço</th>
        <th>Ações</th>
      </tr>
      @foreach ($montadoras as $montadora)
      <tr>
        <td>{{ $montadora->name }}</td>
        <td>{{ $montadora->nomeDoCarro }}</td>
        <td>{{ $montadora->dtVenda }}</td>
        <td>{{ $montadora->dtEntrega }}</td>
        <td>{{ $montadora->preco }}</td>
        <td>
          <form method="POST" action="/deletar_montadora/{{$montadora->id}}">
            <a href="/editar_montadora/{{$montadora->id}}">Editar</a>
            @csrf
            {{ method_field("DELETE") }}
            <input type="submit" value="Deletar Montadora">
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  @endif
</body>
</html>