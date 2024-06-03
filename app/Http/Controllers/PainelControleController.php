<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Compartilhamentos;


class PainelControleController extends Controller
{
    public function index() // perfil do usuario que esta logado
    {
        return view('profile', ['usuarios' => User::all()]);
    }
    public function userProfile($id) // perfil de qualquer usuario 
    {
        return view('shared.profile-box', ['user' => User::find($id)]);
    }

    public function follow($user)
    {

        $follower = auth()->user();

        $follower->followings()->attach($user);

        return redirect()->route('painel')->with('success', "Seguindo com sucesso!");
    }



    public function unfollow($id)
    {
        $unfollower = auth()->user();

        $unfollower->followings()->detach($id);

        return redirect()->route('painel')->with('success', "Deixou de seguir com sucesso!");
    }
}
