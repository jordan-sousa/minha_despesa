<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Services\CategoriaServico;
use Illuminate\Http\Request;

class CategoriaController extends Controller {
    
    protected $categoriaService;

    public function __construct(CategoriaServico $categoriaService){
        $this->categoriaService = $categoriaService;
    }

    public function CadastrarCategoria() {

        return view('cadastrar_categoria');
    }

    public function SaveCategoria(Request $request) {
        $this->categoriaService->SaveCategoria($request['nome']);

        return redirect('/cadastrar-categorias');
    }

    public function ListarCategoria() {
        $categoria = $this->categoriaService->ListarCategoria();

        return view('listar_categoria', ['categorias'=> $categoria]);
    }

    public function DeleteCategoria($id) {
        $this->categoriaService->DeleteCategoria($id);

        return redirect('/listar-categoria');
    }
}
