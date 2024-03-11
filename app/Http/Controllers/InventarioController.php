<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;

class InventarioController extends Controller
{

    public function index(){

       // var_dump(Alimento::all());
        return view ('inventario');
    }


    // aqui estou criando um alimento
    public function store(){
        $nome = request()->get('nome');
        $tipo = request()->get('tipo');
        $quantidade = request()->get('quantidade');
        $origem = request()->get('origem');
        $marca = request()->get('marca');

        $alimento = new Alimento([
            'nome' => $nome,
            'tipo' => $tipo,
            'quantidade' => $quantidade,
            'origem' => $origem,
            'marca' => $marca,
        ]);

        $alimento->save();   

        
    }
}
