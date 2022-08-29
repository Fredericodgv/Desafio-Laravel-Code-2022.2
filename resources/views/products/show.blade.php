<x-app-layout>
    @slot('header')
        @slot('title', 'Detalhes do Produto')
    @endslot

    @slot('body')
        @include('products.form', ['enable' => 'disabled'])
    @endslot

</x-app-layout>
