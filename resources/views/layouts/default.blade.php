<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Recebe um valor chamado title, e caso não  recebe utiliza 'meu titulo' como padrão --}}
    <title>@yield('title', 'Meu título')</title>
</head>

<body>
    <h1>Meu layout</h1>
    <hr />

    {{-- Define que aqui será inserido o conteudo das demais páginas --}}
    @yield('content')
</body>

</html>
