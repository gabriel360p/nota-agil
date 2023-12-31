@extends('layouts.auth-master')

@section('conteudo')
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">Bem vindo de volta!</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" action="/login" role="form">
                                    @csrf
                                    <label>Email</label>
                                    <div class="mb-3">
                                        <input type="email" value="{{@old('email')}}" required class="form-control" name="email" placeholder="Email"
                                            aria-label="Email" aria-describedby="email-addon">
                                        @error('email')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label>Senha</label>
                                    <div class="mb-3">
                                        <input type="password" value="{{@old('password')}}" required class="form-control" name="password" placeholder="Senha"
                                            aria-label="Password" aria-describedby="password-addon">
                                        @error('password')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Não tem uma conta?
                                    <a href="/register" class="text-info text-gradient font-weight-bold">Cadastrar-se</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                style="background-image:url('{{ asset('img/curved-images/curved6.jpg') }}')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
