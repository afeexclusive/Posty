<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function signinuser()
    {
        dd('ok');
        //auth()->attempt($request->only('email', 'password'));
    }
}
