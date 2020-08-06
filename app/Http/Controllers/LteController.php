<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LteController extends Controller
{
    //
    public function home(){
        return view('lte');
    }
    public function datatables(){
        return view('datatables');
    }
}
