<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Memoria;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function storeComments(Memoria $memoria)
    {


        $comment = new Comment();
        $comment->memoria_id = $memoria->id;
        $comment->user_id = auth()->id();
        $comment->comentario = request()->get('comentario');
        $comment->save();

        return redirect()->route('dashboard', $memoria->id)->with('success', "Comentário postado com sucesso !");
    }

    public function destroy($id)
    {

        $comentario =  Comment::where('id', $id)->first();
        $comentario->delete();

        return redirect()->route('dashboard')->with('success', 'Comentário apagado com sucesso !');
    }
}
