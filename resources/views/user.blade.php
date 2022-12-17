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
</body>

</html>
