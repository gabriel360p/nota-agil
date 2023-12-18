@extends('layouts.master')

@section('conteudo')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 text-center">
                    <span class="display-5">Informações do usuário</span>
                </div>
                <form action="/profile" method="POST" class="p-4">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Nome do Usuário</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" required name="name"
                            id="" aria-describedby="helpId" placeholder="">

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required value="{{ Auth::user()->email }}"
                            id="" aria-describedby="helpId" placeholder="">

                    </div>

                    <hr>
                    <span class="display-5">Alterar Senha</span>

                    <div class="mb-3">
                        <label for="" class="form-label">Nova Senha</label>
                        <input type="password" class="form-control" name="password" id="" aria-describedby="helpId"
                            placeholder="">

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Confirmar nova senha</label>
                        <input type="password" class="form-control" name="password_confirmation" id=""
                            aria-describedby="helpId" placeholder="">

                    </div>

                    @if ($errors->any())
                        @foreach ($errors->all() as $item)
                            <span class="mb-3 badge bg-warning">{{ $item }}</span>
                            <br>
                        @endforeach
                    @endif

                    <div>
                        <button class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Apagar Conta
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Insira sua senha para confirmar</h6>
                    <form action="/profile/delete" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="password" required class="form-control" name="password" id=""
                                aria-describedby="helpId" placeholder="Senha Atual" />
                        </div>
                        <button class="btn btn-danger">Apagar</button>
                        <div class="modal-footer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
