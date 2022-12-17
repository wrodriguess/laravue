{{-- Utilizando a tamplate do blade --}}
@extends('layouts.default')

{{-- Informando o titulo da página --}}
@section('title', 'Users')

{{-- Informando que o conteudo abaixo será exibido no yield content --}}
@section('content')
    <h1>Get All - {{ count($users) }} usuários</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
@endsection
