@extends('layouts.main')
@section('title', 'Mostrar produto')
@section('content')

    <h1> Mostrar produto </h1>

    <form method="get" action="">
        <label for="descricao"> Descrição </label>
        <input id="descricao" value="{{ $dados->descricao }}" class="form-control mb-3" name="descricao" disabled readonly>

        <label for="valor"> Valor </label>
        <input id="valor" value="{{ $dados->valor }}" class="form-control mb-3" name="valor" disabled readonly>

        <a href="/produtos" class="btn btn-outline-dark"> Voltar </a>
        <a href='/produtos/editar/{{ $dados->id }}' class='btn btn-outline-warning'> Editar </a>
        <a href='/produtos/excluir/{{ $dados->id }}' class='btn btn-outline-danger'> Excluir </a>
        <!--<button class="btn btn-primary"> Pronto </button>-->
    </form>

@endsection
