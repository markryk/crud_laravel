@extends('layouts.main')

@section('title', 'Adicionar produto')

@section('content')

    <h1 class="mb-3"> Lista de produtos () </h1>

    <ul class="nav nav-pills">
    <li class="nav-item">
        <a class="btn btn-success" href="/produtos/adicionar"> + Adicionar produto</a>
    </li>
    </ul>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
                //foreach ($restaurantes as $cada) {
                foreach ($dados as $cada) {
                    echo "<tr>
                        <td>{$cada->descricao}</td>
                        <td>{$cada->valor}</td>
                        <td>
                            <a href='/produtos/mostrar/{$cada->id}' class='btn btn-outline-primary'> Mostrar </a>
                            <a href='/produtos/editar/{$cada->id}' class='btn btn-outline-warning'> Editar </a>
                            <a href='/produtos/excluir/{$cada->id}' class='btn btn-outline-danger'> Excluir </a>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>

@endsection
