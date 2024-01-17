@extends('layouts.main')

@section('title', 'Adicionar restaurante')

@section('content')

    <h2> Adicionar restaurante </h2>
    <form action="/store_restaurante" method="get">
        <div class="mb-3">
            <label for="label_nome" class=""> Nome </label>
            <input type="text" class="form-control" id="label_nome" name="nome" placeholder="" required>
        </div>
        <div class="mb-3">
            <label for="label_endereco" class=""> Endereço </label>
            <input type="text" class="form-control" id="label_endereco" name="endereco" placeholder="" required>
        </div>
        <button class="btn btn-dark" type="submit"> Adicionar </button>
    </form>

@endsection
