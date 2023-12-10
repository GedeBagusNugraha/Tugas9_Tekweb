<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() : View
    {
        return view('frontpage.loginpage');
    }

    public function signup() : View
    {
        return view('frontpage.signuppage');
    }
}
