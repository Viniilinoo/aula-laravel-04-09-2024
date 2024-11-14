<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Montadora;
use Illuminate\Http\Request;

class MontadoraController extends Controller
{
    public function criar(Request $request) {
        $montadora = new Montadora;
        $montadora->nome = $request->nome;
        $montadora->nomeDoCarro = $request->nomeDoCarro;
        $montadora->dtVenda = $request->dtVenda;
        $montadora->preco = $request->preco;
        $montadora->dtEntrega = $request->dtEntrega;

        $montadora->save();
        return redirect('/listar_montadora');
    }

    public function listar() {
        $montadora = Montadora::all();

        return view("montadora", ["montadora"=>$montadora]);
    }
    public function formCriarMontadora() {
        return view("cadastro_Montadora");
    }

    public function deletar($id) {
        $montadora = new Montadora();
        $montadora->find($id)->delete();
        return redirect('/listar_montadora');
    }

    public function formEditarMontadora($id) {
        $montadora = Montadora::find($id);

        return view('editar_montadora', ['montadora'=>$montadora]);
    }

    public function editarMontadora(Request $request) {
        Montadora::where('id', $request->id) -> update([
            'nome' => $request->nome,
            'nomeDoCarro' => $request->nomeDoCarro,
            'dtVenda' => $request->dtVenda,
            'dtEntrega' => $request->dtEntrega,
            'preco' => $request->preco,
        ]);

        return redirect('/listar_montadora');
    }
}