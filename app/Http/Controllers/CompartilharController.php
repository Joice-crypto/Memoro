<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
