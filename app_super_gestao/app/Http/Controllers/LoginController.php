<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function loginPage(){
        return view('site.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'senha');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida, redirecionar para a página desejada após o login
            return redirect()->intended(route('app.fornecedores')); // Redireciona para /fornecedores após o login
        }

        // Falha na autenticação, redirecionar de volta para a página de login
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não são válidas.',
        ]);
    }


}
