@extends('layouts.master')

@section('conteudo')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex flex-row align-items-center justify-content-between">
                    <h6>Notas Salvas</h6>
                    <a class="btn btn-secondary" href="/notas/create">
                        <i class="fa-solid fa-plus"></i>
                        <span class="nav-link-text ms-1">Nova Nota</span>

                    </a>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID da
                                        nota
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Criação</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Quem Gerou</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notas as $nota)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $nota->id }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $nota->created_at }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{ $nota->user->name }}</h6>
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
                                                            href="{{ route('notas.show', $nota->id) }}">Abrir</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('notas.delete', $nota->id) }}">Apagar</a></li>
                                                    <li><a class="dropdown-item" href="{{route('notas.download',$nota->id)}}">Baixar</a></li>
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
                    {{ $notas->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
