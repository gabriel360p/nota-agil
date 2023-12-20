<div class="container-fluid py-4">
    <div class="row">
        <div class="container">
            <div class="text-center" style="margin-top:20px;">
                <span class="display-5">NotaÁgil</span>
                <hr class="border-bottom">
            </div>
            <div class="" style="margin-top:20px;">
                <h5>Lista de produtos:</h5>
            </div>

            <div class="">
                @foreach ($nota->produtos as $produto)
                    <div class="d-flex flex-row justify-content-between">
                        <p>Nome do produto: {{ $produto->nome }} </p>
                        <p>Preço: R${{ $produto->preco }}</p>
                    </div>
                @endforeach
                <hr class="border-bottom">
            </div>

            <div class=" d-flex flew-row justify-content-between">

                <div>
                    <h6>Autor: {{ $nota->user->name }}</h6>
                    <h6>Criação: {{ $nota->created_at }}</h6>
                </div>
                <div>
                    <h6>Preço Total: {{ $nota->preco_total }}</h6>
                </div>
            </div>

        </div>

    </div>
</div>
