<?php

namespace App\Http\Controllers;

use App\Models\Memoria;
use App\Models\Alimento;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class MemoriaController extends Controller
{
    public function index()
    {
        return view('memorias', ['memorias' => Memoria::all()]);
    }

    public function new_memorias()
    {

        return view('novas_memorias', ['alimentos' => Alimento::all()]);
    }

    public function storeMemoria(Request $request)
    {
       

        $descricao = request()->get('descricao');
        $titulo = request()->get('titulo');
        $alimento_id = request()->get('alimento_id');

        $validated = $request->validate([
            'imagem' => 'imagem'
        ]);

        //  Verifica se foi enviado um arquivo
        if (request()->has('imagem')) {

            $imagePath = request()->file('imagem')->store('memoria', 'public');
            $validated['imagem'] = $imagePath;
        }

        $memoria = new Memoria([
            'descricao' => $descricao,
            'titulo' => $titulo,
            'imagem' => $imagePath,
            'alimento_id' => $alimento_id,
        ]);

        $memoria->save();

       redirect()->route('memorias');
    }
}
