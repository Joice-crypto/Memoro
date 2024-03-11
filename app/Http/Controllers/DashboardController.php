<?php

namespace App\Http\Controllers;

use App\Models\Memoria;
use App\Models\Alimento;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
       


        return view ('dashboard');
        // return view ('dashboard' , [
        //     'memorias' => Memoria::all()
        // ]);
    }
}
