<?php

namespace App\Http\Controllers;

use App\Models\Memoria;
use App\Models\Compartilhamentos;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $memoriasCompartilhadas = Compartilhamentos::orderBy('created_at', 'DESC');

        if (request()->has('search')) {
            // Como 'descricao' é um campo de 'memoria', você precisa ajustar a consulta para buscar nas memórias associadas aos compartilhamentos
            $memoriasCompartilhadas = $memoriasCompartilhadas->whereHas('memoria', function ($query) {
                $query->where('descricao', 'like', '%' . request()->get('search', '') . '%');
            });
        }
        $topUsers = User::orderBy('created_at', 'DESC')->limit(5)->get();
        // Carregar as memórias associadas aos compartilhamentos
        $memoriasCompartilhadas = $memoriasCompartilhadas->with('memoria.comments')->paginate(5);



        return view('dashboard', ['memoriasComp' => $memoriasCompartilhadas, 'topUsers' => $topUsers]);
    }
}
