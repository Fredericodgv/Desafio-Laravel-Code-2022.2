<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="row">
                    <form method="post" action="{{ $action ?? '/' }}" id="form-adicionar" enctype="multipart/form-data">
                        @csrf
                        @method($method ?? 'get')
                        <center>
                            <div class="form-group col-sm-12 col-md-4">
                                <label class="d-flex justify-content-start" for="name" class="required">Nome
                                </label>
                                <input {{ $enable }} type="text" name="name" id="name" autofocus
                                    class="form-control" required value="{{ old('name', $product->name) }}">
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label class="d-flex justify-content-start" for="email" class="required">Sabor
                                </label>
                                <input {{ $enable }} type="text" name="flavor" id="flavor"
                                    class="form-control" required value="{{ old('flavor', $product->flavor) }}">
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label class="d-flex justify-content-start" for="price" class="required">Preço
                                </label>
                                <input {{ $enable }} type="number" name="price" id="price" step="any"
                                    class="form-control" value="{{ old('price', $product->price) }}">
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label class="d-flex justify-content-start" for="text" class="required">Descrição
                                </label>
                                <input {{ $enable }} type="text" name="description" id="description"
                                    class="form-control" required
                                    value="{{ old('description', $product->description) }}">
                            </div>

                            <div class="form-group col-sm-12 col-md-4">
                                <label class="d-flex justify-content-start" for="photo" class="required">Foto
                                </label>
                                @if ($enable == '')
                                    <input {{ $enable }} type="file" accept="image/*" name="photo"
                                        id="photo" class="form-control"
                                        value="{{ old('photo', $product->photo) }}">
                                @else
                                    <img src="{{ $product->photo }}" class="d-block w-100 imagem-teste"
                                        alt="{{ $product->name }}">
                            </div>
                            @endif

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
                            <a href="{{ route('products.index') }}" class="btn ">
                                Voltar
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">
                                Editar
                            </a>
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
