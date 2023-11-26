<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }
    public function registerPage()
    {
        return view('auth.register');
    }

    public function login()
    {
        //
    }
    public function register()
    {
        //
    }
}
