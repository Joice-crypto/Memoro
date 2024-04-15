<?php

namespace App\Http\Controllers;

use App\Models\Memoria;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // checa se tem uma busca 
        // se tiver, checa se o dado procurado esta no banco de dados

        $memorias = Memoria::orderBy('created_at', 'DESC');

        if (request()->has('search')) {
            $memorias = $memorias->where('descricao', 'like', '%' . request()->get('search', '') . '%');
        }


        return view('dashboard', ['memorias' => $memorias->paginate(5)]);
        // return view('dashboard', ['memorias' => Memoria::all()]);
    }
}
