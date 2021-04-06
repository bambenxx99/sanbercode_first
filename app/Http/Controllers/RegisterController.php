<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function sanbercode(Request $request)
    {
        $name=$request['firstname'];
        return view('sanbercode', ['name' => $name]);
    }
}
