<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\Categoria;

use Illuminate\Http\Request;

class UsuarioController extends Controller {
    public function CadastrarUsuario() {
        $user = Usuario::get();
        return view('cadastro_usuario', ['usuario'=> $user]);
        
    }

    public function SalvarUsuario(Request $request) {

        try {   // TRATAMENTO DE ERRO
            $request->validate([
                'nome' => "required",
                'email' => "required|email|unique:usuario",
                'senha' => "required|min:8",
            ]);
            
            $user = Usuario::create([
                'nome'=>$request->nome,
                'email'=>$request->email,
                'senha' => Hash::make($request->senha),
            ]);
            // dd($user);
    
            return redirect('/cadastrar-usuario');
        } catch (\Throwable $th) {
            dd($th);
        }
        
    }
}
