<x-app-layout>
    @slot('header')
        @slot('title', 'Editar Produto')
    @endslot

    @slot('body')
        @include('products.form', ['enable' => '', 'action' => route('products.update', $product->id), 'method' => 'put'])
    @endslot
</x-app-layout>
