<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        return $user->all();
    }

    public function show(User $user)
    {
        return view('user', [
            "user" => $user
        ]);
    }
}
