<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\VarDumper\VarDumper;

class InventarioController extends Controller
{
    // aqui eu visualizo meus alimentos
    public function index()
    {


        $alimento = Alimento::all();
        //    var_dump($alimento->toArray());
        if ($alimento->isEmpty()) {
            return view('NoAlimento');
        } else

            return view('inventario', ['alimentos' => Alimento::all()]);
    }


    // aqui estou criando um alimento
    public function store()
    {
        $nome = request()->get('nome');
        $tipo = request()->get('tipo');
        $quantidade = request()->get('quantidade');
        $origem = request()->get('origem');
        $marca = request()->get('marca');

        // Mostra os valores capturados
        // dd($nome, $tipo, $quantidade, $origem, $marca);

        $alimento = new Alimento([
            'nome' => $nome,
            'tipo' => $tipo,
            'quantidade' => $quantidade,
            'origem' => $origem,
            'marca' => $marca,
        ]);


        if ($alimento->save()) {
            return redirect()->route('alimentos.view')->with('success', 'Alimento criado com sucesso !');
        } else {
            // Ocorreu um erro ao salvar
            return back()->withErrors('Erro ao criar o alimento.');
        }

        // var_dump($alimento->save());

    }

    public function cadastrarAlimentoView()
    {
        return view('entradas');
    }

    public function destroy($id)
    {

        $alimento =  Alimento::where('id', $id)->first();
        $alimento->delete();

        return redirect()->route('alimentos.view')->with('success', 'Alimento apagado com sucesso !');
    }

    // vai visualizar um alimento especifico
    public function AlimentoView($id)
    {


        return view('alimentoView', ['id' => Alimento::find($id)]);
    }

    public function edit(Alimento $id)
    {
        $editing = true;
        return view('alimentoView', compact('id', 'editing'));
    }

    public function update(Alimento $id)
    {
        request()->validate([
            'nome' => 'max:240',
            'origem' => 'max:240',
            'marca' =>  'max:240',

        ]);

        $id->nome = request()->get('nome', '');
        $id->tipo = request()->get('tipo', '');
        $id->quantidade = request()->get('quantidade', '');
        $id->origem = request()->get('origem', '');
        $id->marca = request()->get('marca', '');
        $id->save();

        return redirect()->route('alimentos.view')->with('seccess', "Alimento atualizado com sucesso!");
    }
}
