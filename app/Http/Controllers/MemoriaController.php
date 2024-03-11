<?php

namespace App\Http\Controllers;

use App\Models\Memoria;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class MemoriaController extends Controller
{
    public function index(){

        return view ('entradas');
    }

    public function new_memorias(){

        return view ('novas_memorias');
    }
}
