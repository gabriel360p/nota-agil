@extends('layouts.master')

@section('conteudo')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 text-center">
                    <span class="display-5">Informações do usuário</span>
                </div>
                <form action="" class="p-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Legenda</label>
                        <input type="text" class="form-control" value="{{ @old('email') }}" name="email" id=""
                            aria-describedby="helpId" placeholder="">
                        @error('email')
                            <span class="badge bg-warning">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Legenda</label>
                        <input type="password" class="form-control" name="password" value="{{ @old('password') }}"
                            id="" aria-describedby="helpId" placeholder="">
                        @error('password')
                            <span class="badge bg-warning">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Legenda</label>
                        <input type="password" class="form-control" name="password" value="{{ @old('password') }}"
                            id="" aria-describedby="helpId" placeholder="">
                        @error('password')
                            <span class="badge bg-warning">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Legenda</label>
                        <input type="password" class="form-control" name="password" value="{{ @old('password') }}"
                            id="" aria-describedby="helpId" placeholder="">
                        @error('password')
                            <span class="badge bg-warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-secondary">Editar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
