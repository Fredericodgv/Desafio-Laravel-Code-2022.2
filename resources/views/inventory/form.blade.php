<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="row">
                    <form method="post" action="{{ $action ?? '/' }}" id="form-adicionar">
                        @csrf
                        @method($method ?? 'get')
                        <center>
                            <div class="form-group col-sm-12 col-md-4">
                                <label class="d-flex justify-content-start" for="name" class="required">Produto </label>
                                <input {{ $enable }} type="text" name="product" id="product" autofocus
                                    class="form-control" required value="{{ old('product', $inventory->?) }}">
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label class="d-flex justify-content-start" for="email" class="required">Quantidade
                                </label>
                                <input {{ $enable }} type="text" name="quantity" id="quantity"
                                    class="form-control" required value="{{ old('quantity', $inventory->quantity) }}">
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label class="d-flex justify-content-start" for="price" class="required">Data
                                </label>
                                <input {{ $enable }} type="number" min="1" name="date" id="date"
                                    step="any" class="form-control" required
                                    value="{{ old('price', $inventory->date) }}">
                            </div>
                        </center>
                    </form>

                    @if ($enable == '')
                        <div class="d-flex justify-content-end">
                            <button type="submit" form="form-adicionar" class="btn btn-primary">
                                Salvar Produto
                            </button>
                        </div>
                    @else
                        <div class="mt-4 d-flex justify-content-center">
                            <a href="{{ route('inventory.index') }}" class="btn ">
                                Voltar
                            </a>
                            <a href="{{ route('inventory.edit', $product->id) }}" class="btn btn-primary">
                                Editar
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
