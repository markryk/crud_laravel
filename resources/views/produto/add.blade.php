@extends('layouts.main')

@section('title', 'Adicionar produto')

@section('content')

    <h2> Adicionar produto </h2>
    <form action="/store_produto" method="get">
        <div class="mb-3">
            <label for="label_descricao" class=""> Descrição </label>
            <input type="text" class="form-control" id="label_descricao" name="descricao" placeholder="" required>
        </div>
        <div class="mb-3">
            <label for="label_valor" class=""> Valor </label>
            <input type="text" class="form-control" id="label_valor" name="valor" placeholder="" required>
        </div>
        <a href="/produtos" class="btn btn-outline-dark"> Voltar </a>
        <button class="btn btn-dark" type="submit"> Adicionar </button>
    </form>

@endsection
