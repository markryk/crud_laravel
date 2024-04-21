<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestauranteController extends Controller
{
    //Display a listing of the resource.
    //Controller para listar todos os restaurantes
    public function index() {
        $rest = DB::select('SELECT * FROM tb_restaurantes');
        return view('restaurante.list', ['dados' => $rest]);
    }

    //Show the form for creating a new resource.
    //Controller p/ criar um restaurante
    public function create() {
        return view('restaurante.add');
    }

    //Store a newly created resource in storage.
    //Controller p/ salvar no BD, após adicionar
    public function store(Request $request) {
        $rest = new Restaurante();

        $rest->nome = $request->nome;
        $rest->endereco = $request->endereco;

        //$rest = DB::insert('INSERT INTO tb_restaurantes(nome, endereco) VALUES (:nome, :endereco)');
        DB::table('restaurantes')->insert(['nome' => $rest->nome, 'endereco' => $rest->endereco]);

        //$rest->save();

        //return redirect('restaurantes.list')->with('msg', 'Restaurante adicionado com sucesso');
        //return view('restaurante.list')->with('msg', 'Restaurante adicionado com sucesso');

        $rest = DB::select('SELECT * FROM tb_restaurantes');
        return view('restaurante.list', ['dados' => $rest]);
    }

    //Display the specified resource.
    //Controller p/ mostrar o restaurante em questão
    public function show(string $id) {
        $rest = Restaurante::findOrFail($id);
        return view('restaurante.show', ['dados' => $rest]);
    }

    //Show the form for editing the specified resource
    //Controller p/ editar o restaurante em questão
    public function edit(string $id) {
        $rest = Restaurante::findOrFail($id);
        //ao chamar esse método, deve-se ir no arq. config/database.php, escolher o tipo de conexão, linha prefix e adicionar o início do nome da tabela
        return view('restaurante.edit', ['dados' => $rest]);
    }

    //Update the specified resource in storage
    //Controller p/ atualizar o BD, com as novas informações do restaurante
    public function update(Request $request, string $id) {
        $dados = $request->all();
        Restaurante::findOrFail($request->id)->update($dados);

        //$restaurant = DB::table('tb_restaurantes')->where('id', $id)->update(['nome' => $rest->nome, 'endereco' => $rest->endereco]);
        //return view('restaurante.list', ['dados' => $restaurant]);
        return redirect('/restaurantes');
    }

    //Remove the specified resource from storage
    //Controller p/ excluir o restaurante em questão
    public function destroy(string $id) {
        Restaurante::findOrFail($id)->delete();
        return redirect('/restaurantes');
    }
}
