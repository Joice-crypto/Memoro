<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memoria;
use App\Models\Compartilhamentos;

class CompartilharController extends Controller
{
    public function shareMemoria($memoriaId)
    {

        $compartilhamento = new Compartilhamentos();
        $compartilhamento->memoria_id = $memoriaId;
        $compartilhamento->usuario_id = auth()->id();
        $compartilhamento->save();


        return redirect()->back()->with('success', 'Memória compartilhada com sucesso!');
    }

    public function like(Compartilhamentos $id)
    {
        $liker = auth()->user();

        $liker->likes()->attach($id);
        return redirect()->route('dashboard');
    }

    public function unlike($id)
    {
        $liker = auth()->user();
        $liker->likes()->detach($id);
        return redirect()->route('dashboard');
    }
}
