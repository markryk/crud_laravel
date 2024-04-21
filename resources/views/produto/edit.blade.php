@extends('layouts.main')
@section('title', 'Editar produto')
@section('content')

    <h1> Editar produto </h1>

    <form method="get" action="/produtos/update/{{$dados->id}}">
        <label for="descricao"> Descrição </label>
        <input id="descricao" value="{{ $dados->descricao }}" class="form-control mb-3" name="descricao">

        <label for="valor"> Valor </label>
        <input id="valor" value="{{ $dados->valor }}" class="form-control mb-3" name="valor">

        <a href="/produtos" class="btn btn-outline-dark"> Voltar </a>
        <button class="btn btn-primary"> Pronto </button>
    </form>

@endsection
