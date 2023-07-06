<?php
namespace App\Services;

use App\Models\Categoria;

class CategoriaServico{

    public function SaveCategoria($categoria) {
        Categoria::create([
            "nome" => $categoria
        ]);
    }

    public function ListarCategoria() {

        $categorias = Categoria::get();
        return  $categorias;
    }

    public function DeleteCategoria($id) {
        Categoria::where('id', $id)->delete();
    }
}