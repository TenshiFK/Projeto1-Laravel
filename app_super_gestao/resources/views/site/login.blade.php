@extends('site.layouts.basico')

@section('titulo', 'Login')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>

        </div>
        <div class="container-forms">
            <form action="{{ route('site.login') }}" method="POST">
    
                @csrf
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="email">
            
                <label for="senha">Senha:</label>
                <input type="password" name="senha" placeholder="senha">
            
                <button>Entrar</button>
            </form>
            <a href="{{ route('site.cadastro') }}">Não tem uma conta ainda? Registre-se aqui</a>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection