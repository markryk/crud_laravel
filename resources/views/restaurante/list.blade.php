@extends('layouts.main')

@section('title', 'Adicionar restaurante')

@section('content')

    <h1 class="mb-3"> Lista de restaurantes () </h1>

    <ul class="nav nav-pills">
    <li class="nav-item">
        <a class="btn btn-success" href="/restaurantes/adicionar"> + Adicionar restaurante</a>
    </li>
    </ul>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
                //foreach ($restaurantes as $cada) {
                foreach ($dados as $cada) {
                    echo "<tr>
                        <td>{$cada->nome}</td>
                        <td>{$cada->endereco}</td>
                        <td>
                            <a href='/restaurantes/mostrar/{$cada->id}' class='btn btn-outline-primary'> Mostrar </a>
                            <a href='/restaurantes/editar/{$cada->id}' class='btn btn-outline-warning'> Editar </a>
                            <a href='/restaurantes/excluir/{$cada->id}' class='btn btn-outline-danger'> Excluir </a>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>

@endsection
