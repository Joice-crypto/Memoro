<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovasEntradasController extends Controller
{
    public function index(){
        return view ('entradas');
    }
}
