<?php

namespace App\Http\Controllers;

use App\Models\Memoria;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard', ['memorias' => Memoria::all()]);
    }
}
