<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <div>
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid"><a aria-current="page" href="/"
                        class="router-link-active router-link-exact-active navbar-brand text-light">NotaÁgil</a><button
                        class="navbar-toggler text-light" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon text-light"></span></button>
                    <div class="collapse navbar-collapse text-light" id="navbarNavAltMarkup">
                        <div class="navbar-nav"><a aria-current="page" href="/"
                                class="router-link-active router-link-exact-active nav-link text-light active">Login</a><a
                                href="/register" class="nav-link text-light">Cadastrar</a><a href="" </div>
                        </div>
            </nav>
        </div>

    </header>

    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" value="{{ @old('email') }}" name="email"
                                id="" aria-describedby="helpId" placeholder="">
                            @error('email')
                                <span class="badge bg-warning">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="{{ @old('password') }}"
                                id="" aria-describedby="helpId" placeholder="">
                            @error('password')
                                <span class="badge bg-warning">{{ $message }}</span>
                            @enderror
                        </div>

                        <button class="btn btn-success">Logar</button>
                    </form>
                </div>
                <div class="col"></div>

            </div>
        </div>
    </main>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
