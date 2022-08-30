<x-app-layout>
    @slot('header')
        @slot('title', 'Detalhes do Estoque')
    @endslot

    @slot('body')
        @include('inventory.form', ['enable' => 'disabled'])
    @endslot

</x-app-layout>
