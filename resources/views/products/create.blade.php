<x-app-layout>
    @slot('header')
        @slot('title', 'Adicionar Produto')
    @endslot

    @slot('body')
        @include('products.form', ['enable' => '', 'action' => route('products.store'), 'method' => 'post'])
    @endslot
</x-app-layout>
