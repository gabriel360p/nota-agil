<!doctype html>
<html lang="en">

<head>
    <title> @yield('title') </title>
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
                <div class="container-fluid"><a aria-current="page" href="/dashboard"
                        class="router-link-active router-link-exact-active navbar-brand text-light">NotaÁgil</a><button
                        class="navbar-toggler text-light" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon text-light"></span></button>
                    <div class="collapse navbar-collapse text-light" id="navbarNavAltMarkup">
                        <div class="navbar-nav"><a aria-current="page" href="/dashboard"
                                class="router-link-active router-link-exact-active nav-link text-light active">Início</a>
                            <a href="/notas" class="nav-link text-light">Nova Nota</a><a href="" </div>
                                <a href="/sair" class="nav-link text-light">Sair</a><a href="" </div>

                        </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
