<?php

namespace App\Http\Controllers;

use App\Models\Memoria;
use App\Models\Alimento;
use App\Models\Avaliacao;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class MemoriaController extends Controller
{
    public function index()
    {
        $memorias = Memoria::with('comments')->get();
        return view('memorias', ['memorias' => $memorias]);

        //return view('memorias', ['memorias' => Memoria::all()]);
    }

    public function new_memorias()
    {

        return view('novas_memorias', ['alimentos' => Alimento::all()]);
    }

    public function storeMemoria(Request $request)
    {

        request()->validate([
            'descricao' => 'required|max:500',
            'titulo' => 'required'

        ]);


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

        if ($request->input('fazerAvaliacao') . value('sim')) {

            // Criar avaliação
            $avaliacaoAparencia = $request->input('avaliacaoAparencia');
            $avaliacaoSabor = $request->input('avaliacaoSabor');
            $avaliacaoTextura = $request->input('avaliacaoTextura');
            $avaliacaoGeral = $request->input('avaliacaoGeral');
            $observacao = $request->input('observacao');

            $avaliacao = new Avaliacao([
                'avaliacaoAparencia' => $avaliacaoAparencia,
                'avaliacaoSabor' => $avaliacaoSabor,
                'avaliacaoTextura' => $avaliacaoTextura,
                'avaliacaoGeral' => $avaliacaoGeral,
                'observacao' => $observacao,
                'memoria_id' => $memoria->id, // Use o ID da memória recém-criada
            ]);
            $avaliacao->save();
        }

        return redirect()->route('memoria.view')->with('success', 'Memoria criada com sucesso !');
    }

    public function destroy(Memoria $id)
    {

        $id->delete();


        return redirect()->route('memoria.view')->with('success', 'Memoria apagada com sucesso !');
    }
}
