<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello-world', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}', function ($id) {
    return [
        "user" => "xyz",
        "id" => $id
    ];
});

Route::get('/users/{paramB}/{paramA}', function ($paramA, $paramB) {
    return [
        "paramA" => $paramA,
        "paramB" => $paramB
    ];
});

Route::get('/empresa/{nomeDaEmpresa?}', function ($nomaDaEmpresa = null) {
    return "<h1>A empresa " . ($nomaDaEmpresa ?? "Fantasma") . "</h1>";
});

Route::prefix('/usuarios')->group(function () {
    Route::get('/', function () {
        return 'Rota: /usuarios';
    })->name('usuarios');
    Route::get('/findOne', function () {
        return 'Rota: /usuarios/findOne';
    })->name('usuarios.findOne');
});

// Route::get('/user/{user}', function (User $user) {
//     // dd($user);
//     return $user;
// });

// Dizendo ao laravel que irei buscar o usuário utilizando o email
Route::get('/user/{user:email}', function (User $user) {
    return $user;
});

Route::get('/request', function (Request $request) {
    dd($request->all());
});
