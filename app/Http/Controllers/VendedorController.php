<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function criar(Request $request) {
        $vendedor = new Vendedor;
        $vendedor->name = $request->name;
        $vendedor->matricula = $request->matricula;
        $vendedor->comissao = $request->comissao;

        $vendedor->save();
        return redirect('/listar_vendedor');
    }

    public function listar() {
        $vendedor = Vendedor::all();

        return view("vendedor", ["vendedores"=>$vendedor]);
    }
    public function formCriarVendedor() {
        return view("cadastro_vendedor");
    }

    public function deletar($id) {
        $vendedor = new Vendedor();
        $vendedor->find($id)->delete();
        return redirect('/listar_vendedor');
    }

    public function formEditarVendedor($id) {
        $vendedor = Vendedor::find($id);

        return view('editar_vendedor', ['vendedor'=>$vendedor]);

    }

    public function editarVendedor(Request $request) {
        Vendedor::where('id', $request->id) -> update([
            'name' => $request->name,
            'matricula' => $request->matricula,
            'comissao' => $request->comissao,
        ]);
            return redirect('/listar_vendedor');
    }

}
