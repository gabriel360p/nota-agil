@extends('layouts.auth-master')
@section('conteudo')
    <section class="min-vh-100 mb-8">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('{{ asset('img/curved-images/curved14.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Bem Vindo!</h1>
                        <p class="text-lead text-white">Use este formulário para criar uma nova
                            conta!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-body">
                            <form role="form text-left">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nome Completo" name="name"
                                        aria-label="Name" aria-describedby="email-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" name="email"
                                        aria-label="Email" aria-describedby="email-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Senha" name="password"
                                        aria-label="Password" aria-describedby="password-addon">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Confirmar Senha"
                                        name="password_confirmation" aria-label="Password"
                                        aria-describedby="password-addon">
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Salvar</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">já tem uma conta? <a href="/"
                                        class="text-dark font-weight-bolder">Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
