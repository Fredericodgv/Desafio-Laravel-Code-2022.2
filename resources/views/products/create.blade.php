<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <form>
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="name" class="required">Nome </label>
                                <input type="text" name="name" id="name" autofocus class="form-control"
                                    required>
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="email" class="required">Sabor </label>
                                <input type="text" name="text" id="text" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="price" class="required">Preco </label>
                                <input type="number" min="1" name="price" id="price" step="any"
                                    class="form-control" required>
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="email" class="required">Foto </label>
                                <input type="text" name="text" id="text" class="form-control" required>
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label for="text" class="required">Descrição </label>
                                <input type="text" name="text" id="text" class="form-control" required>
                            </div>
                        </form>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('products.store') }}" class="btn btn-primary">
                                Adicionar Produto
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
