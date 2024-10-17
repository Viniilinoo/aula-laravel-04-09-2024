<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function criar(Request $request) {
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;

        $produto->save();
        return redirect('/listar_produto');
    }

    public function listar() {
        $produto = Produto::all();

        return view("produto", ["produto"=>$produto]);
    }
    public function formCriarProduto() {
        return view("cadastro_Produto");
    }

    public function deletar($id) {
        $produto = new Produto();
        $produto->find($id)->delete();
        return redirect('/listar_produto');
    }

    public function formEditarProduto($id) {
        $produto = Produto::find($id);

        return view('editar_produto', ['produto'=>$produto]);
    }

    public function editarProduto(Request $request) {
        Produto::where('id', $request->id) -> update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
        ]);

        return redirect('/listar_produto');
    }
}