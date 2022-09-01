<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @slot('title', 'Dashboard')
        </h2>
    </x-slot>

    @slot('body')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <center>
                            <h2>Bombom da Lu</h2>
                            <a class="btn btn-dark font-bold py-2 px-4 rounded" href="{{ route('products.index') }}">{{ __('Produtos') }}</a>
                            <a class="btn btn-dark font-bold py-2 px-4 rounded" href="{{ route('inventory.index') }}">{{ __('Estoque') }}</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    @endslot
</x-app-layout>
