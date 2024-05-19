<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorizeController extends Controller
{
    public function signin(){
        return view('authorize.signin');
    }

    public function signup(){
        return view('authorize.signup');
    }
}
