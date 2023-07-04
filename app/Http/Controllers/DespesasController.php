<?php
namespace App\Models;

namespace App\Http\Controllers;

use App\Http\Requests\SalvaDespesaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Authenticate;
use App\Models\Despesas;
use App\Models\Categoria;


class DespesasController extends Controller {
    public function CadastrarDespesa() {
        $categorias = Categoria::get();
        // dd($categorias);
        return view('cadastro_despesa', ['categorias'=> $categorias]);
        
    }

    public function SalvarDespesa(SalvaDespesaRequest $request) {

        $nome = $request['nome'];
        $descricao = $request['descricao'];
        $valor = $request['valor'];
        $data_pagamento = $request['data'];
        $categoria_id = $request['categoria_id'];
        $usuario_id = Authenticate::user()->id;
        
        $d = Despesas::create([
            "nome" => $nome,
            "descricao" => $descricao,
            "valor" => $valor,
            "data_pagamento" => date('Y-m-d H:i:s', strtotime($data_pagamento)),
            "categoria_id" => $categoria_id,
            "usuario_id" => $usuario_id
        ]);

        return redirect('/cadastrar-despesa');
    }

    public function ListarDespesa() {
        $despesa = Despesas::select('despesas.id', 'despesas.nome', 'despesas.descricao', 'despesas.valor', 
            'despesas.data_pagamento', 'despesas.categoria_id', 'despesas.usuario_id', 'usuario.nome as usuario', 'categoria.nome as categoria')
            ->leftJoin('usuario', 'usuario.id', '=', 'despesas.usuario_id')
            ->join('categoria', 'categoria.id', '=', 'despesas.categoria_id')
            ->orderBy('despesas.nome', 'asc')
            ->get();
            // dd($despesa);
        return view('lista_despesa', ['despesas' => $despesa]);
    }



    public function DeleteDespesa($id) {
        $despesa = Despesas::where('id', $id)->delete();
        return redirect('/listar-despesa');
    }

    public function AtualizarDespesa($id) {
        $despesa = Despesas::where('id', $id)->first();
        return view('/atualizar_despesa', ['despesa' => $despesa]);
    }
    
    public function EditarDespesa(Request $request, $id) {
        $despesa = Despesas::where('id', $id)->update(['nome' => $request['nome']]);
        // dd($despesa);
        return redirect('/listar-despesa');    
    }    
}
