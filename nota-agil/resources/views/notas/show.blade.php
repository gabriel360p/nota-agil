@extends('layouts.master')

@section('conteudo')
    <div class="row ">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 text-center">
                    <span class="display-5">Dados da Nota #{{ $nota->id }}</span>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="card-header pb-0">
                        <h6>Lista do(s) produtos da nota</h6>
                    </div>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID do
                                        produto
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nome do produto</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nota->produtos as $produto)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $produto->id }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $produto->nome }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $produto->preco }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-flex flex-column justify-content-between">
                        <div>
                            <p>
                                Preço Total: {{ $nota->preco_total }}
                            </p>
                            <p>
                                Gerado por: {{ $nota->user->name }}
                            </p>
                            <p>
                                Criação: {{ $nota->created_at }}
                            </p>
                        </div>

                        <div>
                            <a class="btn btn-secondary" href="{{ route('notas.delete', $nota->id) }}">Apagar</a>
                            <a class="btn btn-secondary" href="{{ route('notas.download', $nota->id) }}">Baixae PDF</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
