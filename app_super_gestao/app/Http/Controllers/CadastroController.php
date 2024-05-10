<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastroPage(){
        return view('site.cadastro');
    }

    public function cadastro(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8|confirmed',
            ]);
    
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
    
            // Redirecionar para a página de login após o cadastro bem-sucedido
            return redirect()->route('site.login');
        } catch (\Exception $e) {
            // Registre a exceção ou retorne para a página de cadastro com uma mensagem de erro
            return redirect()->back()->withErrors(['error' => 'Ocorreu um erro ao tentar criar o usuário.']);
        }
    }
}
