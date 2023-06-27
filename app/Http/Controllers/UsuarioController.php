<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller{
    public function store(Request $request)
    {
        // Validação dos dados recebidos do formulário
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:usuarios',
            'senha' => 'required|min:6',
        ]);

        // Criação do usuário no banco de dados
        // Usuario::create([
        //     'nome' => $request->nome,
        //     'email' => $request->email,
        //     'senha' => bcrypt($request->senha),
        // ]);

        // dd($request);

        // Redirecionamento ou resposta de sucesso
        return redirect()->route('usuarios')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
