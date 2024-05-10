@extends('site.layouts.basico')

@section('titulo', 'Cadastro')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Cadastro</h1>
        </div>
        <div class="container-forms">
            <form action="{{ route('site.cadastro') }}" method="POST">
        
                @csrf
                <label for="name">Nome</label>
                <input type="text" name="name" placeholder="Nome">
        
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="email">
            
                <label for="password">Senha:</label>
                <input type="password" name="password" placeholder="senha">
            
                <label for="password_confirmation">Confirme a Senha:</label>
                <input type="password" name="password_confirmation" placeholder="Confirme a senha">
        
                <button>Registrar</button>
            </form>
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