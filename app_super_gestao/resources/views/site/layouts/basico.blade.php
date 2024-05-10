<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- yield referece á um parâmetro vindo do controller -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super Gestão - @yield('titulo')</title>
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>
    <body>
        <!-- inclusão do arquivo topo -->
        @if(strpos(request()->path(), 'app')!== false)
            @include('site.layouts._partials.topo_app')
        @else
            @include('site.layouts._partials.topo')
        @endif
        <!-- conteudo depende da viwe chamada -->
        @yield('conteudo')
    </body>
</html>