<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @slot('title', 'Estoque')
        </h2>
    </x-slot>

    @slot('body')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('inventory.create') }}" class="btn btn-primary">
                                Adicionar Estoque
                            </a>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Produto</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventory as $inventory)
                                    <tr>
                                        <td>{{ $inventory->product->name }}</td>
                                        <td>{{ $inventory->quantity }}</td>
                                        <td class="options d-flex justify-content-center gap-1">
                                            <a href="{{ route('inventory.show', $invetory->id) }}" class="btn btn-dark">
                                                <i class="fas fa-search"></i>
                                            </a>

                                            <a href="{{ route('inventory.edit', $invetory->id) }}"
                                                class="btn btn-primary"><i class="fas fa-pen"></i></a>

                                            <form class="form-delete d-inline-block"
                                                action="{{ route('inventory.destroy', $invetory->id) }}" method="post">
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
