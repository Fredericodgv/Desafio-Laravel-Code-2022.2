

@section('content')

@slot('create', route('produtos.create'))
@slot('título', 'Productos')
@slot('head')
    <th>Nome</th>
    <th>Preço</th>
    <th></th>
@endslot