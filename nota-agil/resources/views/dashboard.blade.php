@extends('layouts.master')

@section('conteudo')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Notas Fiscais Salvas</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Data de Criação</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Quem Gerou</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Compra #321</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">02/12/2023</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-sm">Julia Medeiros</h6>
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
                                                <li><a class="dropdown-item" href="#">Editar</a></li>
                                                <li><a class="dropdown-item" href="#">Baixar</a></li>
                                                <li><a class="dropdown-item" href="#">Apagar</a></li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
