<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register()
    {
        return view('register');
    }
    public function welcome(Request $request)
    {
        $depan = $request["depan"];
        $belakang = $request["belakang"];
        // return "aa $depan";
        return view('welcome')
        ->with('depan', $depan)
        ->with('belakang', $belakang);
    }
}
