@extends('layouts.main')
@section('title', 'Editar restaurante')
@section('content')

    <h1> Editar restaurante </h1>

    <form method="get" action="/restaurantes/update/{{$dados->id}}">
        <label for="nome">Nome</label>
        <input id="nome" value="{{ $dados->nome }}" class="form-control mb-3" name="nome">

        <label for="endereco">Endereço</label>
        <input id="endereco" value="{{ $dados->endereco }}" class="form-control mb-3" name="endereco">

        <button class="btn btn-primary">PRONTO</button>
    </form>

@endsection
