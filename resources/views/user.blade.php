{{-- Utilizando a tamplate do blade --}}
@extends('layouts.default')

{{-- Informando o titulo da página --}}
@section('title', 'User title')

{{-- Informando que o conteudo abaixo será exibido no yield content --}}
@section('content')
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
@endsection
