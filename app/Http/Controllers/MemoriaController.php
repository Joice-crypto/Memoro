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
        $memorias = Memoria::all();
        if ($memorias->isEmpty()) {
            return view('NoMemoria');
        } else
            return view('memorias',  ['memorias' => Memoria::all()]);
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

        if ($request->input('fazerAvaliacao') == 'sim') {
            $avaliacaoAparencia = $request->input('avaliacaoAparencia');
            $avaliacaoSabor = $request->input('avaliacaoSabor');
            $avaliacaoTextura = $request->input('avaliacaoTextura');
            $avaliacaoGeral = $request->input('avaliacaoGeral');
            $observacao = $request->input('observacao');

            // Cria a nova avaliação associada à memória criada
            $avaliacao = new Avaliacao([
                'avaliacaoAparencia' => $avaliacaoAparencia,
                'avaliacaoSabor' => $avaliacaoSabor,
                'avaliacaoTextura' => $avaliacaoTextura,
                'avaliacaoGeral' => $avaliacaoGeral,
                'observacao' => $observacao,
                'memoria_id' => $memoria->id, // Usa o ID da memória recém-criada
            ]);
            $avaliacao->save();
        }


        return redirect()->route('memoria.view')->with('success', 'Memoria criada com sucesso!');
    }

    public function memoriaView($id)
    {

        return view('memoriaView', ['id' => Memoria::find($id)]);
    }

    public function destroy(Memoria $id)
    {

        $id->delete();


        return redirect()->route('memoria.view')->with('success', 'Memoria apagada com sucesso !');
    }

    public function edit(Memoria $id)
    {
        $editing = true;
        return view('memoriaView', compact('id', 'editing'));
    }

    public function update(Memoria $id)
    {
        request()->validate([
            'titulo' => 'max:240',
            'origem' => 'max:240',
            'marca' =>  'max:240',

        ]);

        $id->titulo = request()->get('titulo', '');
        $id->descricao = request()->get('descricao', '');
        $id->imagem = request()->get('imagem', '');


        foreach ($id->avaliacao as $avaliacao) {
            $avaliacao->avaliacaoAparencia = request()->get('avaliacaoAparencia', '');
            $avaliacao->avaliacaoSabor = request()->get('avaliacaoSabor', '');
            $avaliacao->avaliacaoTextura = request()->get('avaliacaoTextura', '');
            $avaliacao->avaliacaoGeral = request()->get('avaliacaoGeral', '');
            $avaliacao->observacao = request()->get('observacao', '');
            $avaliacao->save(); // Salvando a alteração na avaliação
        }

        $id->save();

        return redirect()->route('memoria.view')->with('seccess', "Memoria atualizada com sucesso!");
    }
}
