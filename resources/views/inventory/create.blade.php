<x-app-layout>
    @slot('header')
        @slot('title', 'Adicionar Estoque')
    @endslot

    @slot('body')
        @include('inventory.form', ['enable' => '', 'action' => route('inventory.store'), 'method' => 'post'])
    @endslot
</x-app-layout>
