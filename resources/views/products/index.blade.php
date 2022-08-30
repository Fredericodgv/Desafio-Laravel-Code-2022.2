<x-app-layout>
    @slot('header')
        @slot('title', 'Produtos')
    @endslot

    @slot('body')
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('products.create') }}" class="btn btn-primary">
                                Adicionar Produto
                            </a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ 'R$ '.number_format($product->price, 2, ',', '.') }}</td>
                                        <td class="options d-flex justify-content-center gap-1">
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-dark">
                                                <i class="fas fa-search"></i>
                                            </a>

                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary"><i
                                                    class="fas fa-pen"></i></a>

                                            <form class="form-delete d-inline-block"
                                                action="{{ route('products.destroy', $product->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endslot
</x-app-layout>
