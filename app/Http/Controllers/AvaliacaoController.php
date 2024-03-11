<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
     public function storeAvaliacao(){
        $avaliacaoAparencia = request()->get('avaliacaoAparencia');
        $avaliacaoSabor = request()->get('avaliacaoSabor');
        $avaliacaoTextura = request()->get('avaliacaoTextura');
        $avaliacaoGeral = request()->get('avaliacaoGeral');
        $observacao = request()->get('observacao');
        $memoria_id = request()->get('memoria_id');
        

        $avaliacao = new Avaliacao([
            'avaliacaoAparencia' => $avaliacaoAparencia,
            'avaliacaoSabor' => $avaliacaoSabor,
            'avaliacaoTextura' => $avaliacaoTextura,
            'avaliacaoGeral' => $avaliacaoGeral,
            'observacao' => $observacao,
            'memoria_id' => $memoria_id,
        ]);

        $avaliacao->save();

       redirect()->route('memorias');
         
     }
}
