<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PainelControleController extends Controller
{
    public function index()
    {
        return view('profile', ['usuarios' => User::all()]);
    }
}
