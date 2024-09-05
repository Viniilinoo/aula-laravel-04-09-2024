<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function criar(Request $request) {
        $produto = new Produto;
        $produto->name = $request->name;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;

        $produto->save();
        return redirect('/listar_produtos');
    }

    public function listar() {
        $produto = Produto::all();

        return view("produto", ["produto"=>$users]);
    }
    public function formCriarProduto() {
        return view("cadastro_Produto");
    }


}
