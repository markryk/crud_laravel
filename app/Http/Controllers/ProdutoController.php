<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    //Display a listing of the resource.
    //Controller para listar todos os produtos
    public function index() {
        $prod = DB::select('SELECT * FROM tb_produtos');
        return view('produto.list', ['dados' => $prod]);
    }

    //Show the form for creating a new resource.
    //Controller p/ criar um produto
    public function create() {
        return view('produto.add');
    }

    //Store a newly created resource in storage.
    //Controller p/ salvar no BD, após adicionar
    public function store(Request $request) {
        $prod = new Produto();

        $prod->descricao = $request->descricao;
        $prod->valor = $request->valor;

        DB::table('produtos')->insert(['descricao' => $prod->descricao, 'valor' => $prod->valor]);

        $prod = DB::select('SELECT * FROM tb_produtos');
        return view('produto.list', ['dados' => $prod]);
    }

    //Display the specified resource.
    //Controller p/ mostrar o produto em questão
    public function show(string $id) {
        $prod = Produto::findOrFail($id);
        return view('produto.show', ['dados' => $prod]);
    }

    //Show the form for editing the specified resource
    //Controller p/ editar o produto em questão
    public function edit(string $id) {
        $prod = Produto::findOrFail($id);
        //ao chamar esse método, deve-se ir no arq. config/database.php, escolher o tipo de conexão, linha prefix e adicionar o início do nome da tabela
        return view('produto.edit', ['dados' => $prod]);
    }

    //Update the specified resource in storage
    //Controller p/ atualizar o BD, com as novas informações do produto
    public function update(Request $request, string $id) {
        $dados = $request->all();
        Produto::findOrFail($request->id)->update($dados);

        //$restaurant = DB::table('tb_restaurantes')->where('id', $id)->update(['nome' => $rest->nome, 'endereco' => $rest->endereco]);
        //return view('restaurante.list', ['dados' => $restaurant]);
        return redirect('/produtos');
    }

    //Remove the specified resource from storage
    //Controller p/ excluir o restaurante em questão
    public function destroy(string $id) {
        Produto::findOrFail($id)->delete();
        return redirect('/produtos');
    }
}
?>
