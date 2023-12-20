<div>

    <div class="row p-3">
        <div class="col-6">
            <div class="mb-3">
                <label for="" class="form-label">Categorias</label>
                <select class="form-select form-select-lg" wire:model.live="filter" id="">
                    <option selected value="0">Todos</option>
                    @foreach ($categorias as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 col-md-6">
            <table class="table align-items-center justify-content-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preço
                        </th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                            Adicionar</th>
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
                                <div class="text-center">
                                    <button wire:click="add({{ $produto }})" class="btn btn-secondary">
                                        +
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-12 col-md-6">

            <div class="d-flex flex-row justify-content-between">
                <div style="margin-left:20px">
                    <h6>
                        Preço Total: {{ $precototal }}
                    </h6>
                </div>
                <div style="margin-right:20px">

                    <button class="btn btn-secondary" wire:click="finalizar">Finalizar</button>
                </div>
            </div>

            @if ($carrinho)
                <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preço
                            </th>
                            <th
                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                Remover</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < sizeof($carrinho); $i++)
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">{{ $carrinho[$i]['nome'] }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">{{ $carrinho[$i]['preco'] }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <button wire:click="remove({{ $i }})" class="btn btn-secondary">
                                            -
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endfor


                    </tbody>
                </table>
            @endif


        </div>

    </div>

</div>
