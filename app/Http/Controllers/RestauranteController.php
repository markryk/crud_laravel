<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rest = DB::select('SELECT * FROM tb_restaurantes');
        return view('restaurante.list', ['dados' => $rest]);

        /*Restaurante::all();
        return view('restaurante.list');*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurante.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rest = new Restaurante();

        $rest->nome = $request->nome;
        $rest->endereco = $request->endereco;

        //$rest = DB::insert('INSERT INTO tb_restaurantes(nome, endereco) VALUES (:nome, :endereco)');
        DB::table('tb_restaurantes')->insert(['nome' => $rest->nome, 'endereco' => $rest->endereco]);

        //$rest->save();

        //return redirect('restaurantes.list')->with('msg', 'Restaurante adicionado com sucesso');

        //return view('restaurante.list')->with('msg', 'Restaurante adicionado com sucesso');

        $rest = DB::select('SELECT * FROM tb_restaurantes');
        return view('restaurante.list', ['dados' => $rest]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        /*$id_int = (int)$id;
        $dados = DB::select('SELECT * FROM tb_restaurantes WHERE id = '.$id_int);
        return view('restaurante.edit', ['dados' => $dados]);*/

        $rest = Restaurante::findOrFail($id);
        //ao chamar esse método, deve-se ir no arq. config/database.php, escolher o tipo de conexão, linha prefix e adicionar o início do nome da tabela
        return view('restaurante.edit', ['dados' => $rest]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /*$id = (int)$_GET['id'];
        $rest = new Restaurante();
        $rest->nome = $request->nome;
        $rest->endereco = $request->endereco;*/

        $dados = $request->all();
        Restaurante::findOrFail($request->id)->update($dados);

        //$restaurant = DB::table('tb_restaurantes')->where('id', $id)->update(['nome' => $rest->nome, 'endereco' => $rest->endereco]);
        //return view('restaurante.list', ['dados' => $restaurant]);
        return redirect('/restaurantes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Restaurante::findOrFail($id)->delete();
        //return view('restaurante.list');
        return redirect('/restaurantes');
    }
}
