<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find One User</title>
</head>

<body>
    <h1>User</h1>
    <p><b>Id:</b> {{ $user->id }}</p>
    <p><b>Nome:</b> {{ $user->name }}</p>

    <a href={{ route('users') }}>All Users</a>

    <hr />

    @php
        $total = 11;
        $variavelVazia = null;
    @endphp

    @empty($variavelVazia)
        <h1>IS NULL</h1>
    @endempty

    @if ($total > 10)
        Total é maior que 10
    @elseif($total == 10)
        Total é 10
    @else
        Total é menor que 10
    @endif
</body>

</html>
