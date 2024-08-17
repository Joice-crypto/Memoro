<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Models\Memoria;
use App\Models\Compartilhamentos;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $alimentos = Alimento::orderBy('created_at', 'DESC');
        $memorias = Memoria::orderBy('created_at', 'DESC');

        if (request()->has('search')) {
            $searchTerm = request()->get('search', '');


            $memorias = $memorias->where(function ($query) use ($searchTerm) {
                $query->where('descricao', 'like', '%' . $searchTerm . '%')
                    ->orWhere('titulo', 'like', '%' . $searchTerm . '%');
            });

            $alimentos = $alimentos->where(function ($query) use ($searchTerm) {
                $query->where('nome', 'like', '%' . $searchTerm . '%')
                    ->orWhere('tipo', 'like', '%' . $searchTerm . '%')
                    ->orWhere('origem', 'like', '%' . $searchTerm . '%')
                    ->orWhere('marca', 'like', '%' . $searchTerm . '%');
            });
        }


        $topUsers = User::orderBy('created_at', 'DESC')->limit(5)->get();

        return view('dashboard', [
            'memoriasComp' => $memorias->get(), // Adicionar get() para executar a consulta
            'alimentos' => $alimentos->get(),   // Adicionar get() para executar a consulta
            'topUsers' => $topUsers
        ]);
    }
}
