<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login()  {
        $login =  Login::all();
        dd($login);
        return view("backend/login");
    }
}
