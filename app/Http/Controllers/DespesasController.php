<?php

namespace App\Http\Controllers;
use App\Models\Despesas;
use App\Models\Categoria;


use Illuminate\Http\Request;

class DespesasController extends Controller {
    public function CadastrarDespesa() {
        // $despesas = Despesas::get();
        $categorias = Categoria::get();
        // dd($categorias);
        return view('cadastro_despesa', ['categorias'=> $categorias]);
        
    }

    public function SalvarDespesa(Request $resquest) {
        $nome = $resquest['nome'];
        $descricao = $resquest['descricao'];
        $valor = $resquest['valor'];
        $data_pagamento = $resquest['data_pagamento'];
        $categoria_id = $resquest['categoria_id'];
        $usuario_id = $resquest['usuario_id'];

        Despesas::create([
            "nome" => $nome,
            "descricao" => $descricao,
            "valor" => $valor,
            "data_pagamento" => date('Y-m-d H:i:s', strtotime($data_pagamento)),
            "categoria_id" => $categoria_id,
            "usuario_id" => 1
        ]);

        return redirect('/cadastrar-despesa');
    }

    public function ListarDespesa() {
        $despesa = Despesas::get();
        $despesa = Despesas::select('despesas.id', 'despesas.nome', 'despesas.descricao', 'despesas.valor', 'despesas.data_pagamento', 'despesas.categoria_id')
            ->join('categoria', 'categoria.id', '=', 'despesas.categoria_id')->get();

        return view('lista_despesa', ['despesas'=> $despesa]);
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
