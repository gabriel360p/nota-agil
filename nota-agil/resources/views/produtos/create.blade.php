@extends('layouts.master')

@section('conteudo')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 text-center">
                    <span class="display-5">Novo Produto</span>
                </div>

                <form action="{{ route('produtos.store') }}" method="POST" class="p-4">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Nome do Produto</label>
                        <input type="text" class="form-control" value="{{ @old('nome') }}" required name="nome"
                            aria-describedby="helpId" placeholder="Nome do Produto">
                        @error('nome')
                            <span class="badge bg-warning">{{ $message }}</span>
                        @enderror
                    </div>

                    <input type="text" hidden value="{{ Auth::user()->id }}" name="user_id">

                    <div class="mb-3">
                        <label for="" class="form-label">Preço</label>
                        <input type="number" class="form-control" value="{{ @old('preco') }}" required name="preco"
                            aria-describedby="helpId" placeholder="Preço">
                        @error('preco')
                            <span class="badge bg-warning">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Categoria</label>
                        <select class="form-select form-select-lg" required name="categoria_id">
                            @foreach ($categorias as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div>
                        <button class="btn btn-success">Salvar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
