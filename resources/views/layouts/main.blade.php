<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--<link href="../../css/styles.css"></link>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="container" style="background-color: #DEDEDE;">
    <h2 class="mt-5">Gestão de Restaurantes</h2>

    <hr>
    <section class="card card-body mt-3">
        <ul class="nav nav-pills mb-3">
        <!--<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Início</a>
        </li>-->
        <li class="nav-item p-1">
            <a class="btn btn-outline-secondary" href="/">Início</a>
        </li>
        <li class="nav-item p-1">
            <a class="btn btn-outline-secondary" href="/restaurantes">Restaurantes</a>
        </li>
        <li class="nav-item p-1">
            <a class="btn btn-outline-secondary" href="/produtos">Produtos</a>
        </li>
        <li class="nav-item p-1">
            <a class="btn btn-outline-secondary" href="/contato">Contato</a>
        </li>
        <li class="nav-item p-1">
            <a class="btn btn-outline-secondary" href="/admin">Admin</a>
        </li>
        <!--<li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>-->
        </ul>

        @yield('content')
    </section>
</body>
</html>
