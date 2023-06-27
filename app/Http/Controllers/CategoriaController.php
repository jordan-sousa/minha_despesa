<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller {
    
    public function CadastrarCategoria() {

        return view('cadastrar_categoria');
    }

    public function SaveCategoria(Request $request) {
        $categoria = $request['nome'];
        Categoria::create([
            "nome" => $categoria
        ]);

        return redirect('/cadastrar-categorias');
    }

    public function ListarCategoria() {
        $categorias = Categoria::get();
        // dd($categorias);
        return view('listar_categoria', ['categorias'=> $categorias]);
    }

    public function DeleteCategoria($id) {
        $categoria = Categoria::where('id', $id)->delete();
        return redirect('/listar-categoria');
    }
}
