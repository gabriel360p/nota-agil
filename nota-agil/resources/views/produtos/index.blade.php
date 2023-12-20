@extends('layouts.master')

@section('conteudo')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex flex-row align-items-center justify-content-between">
                    <h6>Produtos Salvos</h6>
                    <a class="btn btn-secondary" href="/produtos/create">
                        <i class="fa-solid fa-plus"></i>
                        <span class="nav-link-text ms-1">Novo Produto</span>
                    </a>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preço
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Categoria
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Ação</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($produtos as $produto)
                                    <tr>
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
                                        <td>
                                            <div class="d-flex px-2">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">
                                                        <h6 class="mb-0 text-sm">{{ $produto->categoria->nome }}</h6>
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn btn-secondary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Opções
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <!-- Dropdown menu links -->
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('produtos.delete', $produto->id) }}">Apagar</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-center">
                    {{ $produtos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
