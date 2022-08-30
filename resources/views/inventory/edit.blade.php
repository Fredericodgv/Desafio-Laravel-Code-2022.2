<x-app-layout>
    @slot('header')
        @slot('title', 'Editar Estoque')
    @endslot

    @slot('body')
        @include('inventory.form', ['enable' => '', 'action' => route('inventory.update', $inventory->id), 'method' => 'put'])
    @endslot
</x-app-layout>
