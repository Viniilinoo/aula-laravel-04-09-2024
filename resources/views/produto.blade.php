


@foreach ($produto as $produto)
  <div>
    {{$produto->name}} 
    {{$produto->descricao}} 
    {{$produto->preco}}
  </div>
@endforeach