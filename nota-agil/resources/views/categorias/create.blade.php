@extends('layouts.master')

@section('conteudo')
    <div class="row ">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 text-center">
                    <span class="display-5">Nova Categoria</span>
                </div>

                <form action="{{ route('categorias.store') }}" method="POST" class="p-4">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Nome da Categoria</label>
                        <input type="text" class="form-control" value="{{ @old('nome') }}" required name="nome"
                            aria-describedby="helpId" placeholder="Nome da Categoria">
                        @error('nome')
                            <span class="badge bg-warning">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <button class="btn btn-success">Salvar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
