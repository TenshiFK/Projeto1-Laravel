@extends('site.layouts.basico')

@section('titulo', 'Clientes')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Clientes</h1>
        </div>
        <div class="container-fornecedores">
            @foreach($clientes as $cliente)
                <div class="fornecedor">
                    <h2>{{ $cliente['nome'] }}</h2>
                    <p>CPF: {{ $cliente['cpf'] }}</p>
                    <p>DDD: {{ $cliente['ddd'] }}</p>
                    <p>Telefone: {{ $cliente['telefone'] }}</p>
                </div>
            @endforeach
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