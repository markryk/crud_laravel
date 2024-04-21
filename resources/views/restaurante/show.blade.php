@extends('layouts.main')
@section('title', 'Mostrar restaurante')
@section('content')

    <h1> Mostrar restaurante </h1>

    <form method="get" action="">
        <label for="nome"> Nome </label>
        <input id="nome" value="{{ $dados->nome }}" class="form-control mb-3" name="nome" disabled readonly>

        <label for="endereco"> Endereço </label>
        <input id="endereco" value="{{ $dados->endereco }}" class="form-control mb-3" name="endereco" disabled readonly>

        <a href="/restaurantes" class="btn btn-outline-dark"> Voltar </a>
        <a href='/restaurantes/editar/{{ $dados->id }}' class='btn btn-outline-warning'> Editar </a>
        <a href='/restaurantes/excluir/{{ $dados->id }}' class='btn btn-outline-danger'> Excluir </a>
        <!--<button class="btn btn-primary"> Pronto </button>-->
    </form>

@endsection
