<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth as Authenticate;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Usuario;

use Illuminate\Http\Request;

class LoginController extends Controller {
    public function showLoginForm() {
        // dd(Authenticate::user()->id);
        return view('login');
    }

    public function login(Request $request) {
    try {
        $email = $request->email;
        $password = $request->senha;

        $usuario = Usuario::where('email', $email)->first();

        if (!$usuario) {
            throw new \Exception("Usuario ou senha inválida", 1);
        }

        $hashPassVerify = Hash::check($password, $usuario->senha);
        
        if (!$hashPassVerify) {
            throw new \Exception("Usuario ou senha inválida", 1);
        }

        Authenticate::guard('web')->login($usuario);

        // Autenticação bem-sucedida
        return redirect()->intended('/cadastrar-despesa');
    } catch (\Exception $th) {
        dd($th);
        return back()->withErrors([
                    'email' => 'Credenciais inválidas',
                ]);  
        }
    }

    public function logout(Request $request){
    
        Authenticate::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/form-login');
    }

}
