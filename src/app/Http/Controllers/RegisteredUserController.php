<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function index()
    {
        return view ('register');
    }

    public function store(Request $request)
    {
        $register = $request->only(['name', 'email', 'password', 'password_confirmation']);
    }

}
