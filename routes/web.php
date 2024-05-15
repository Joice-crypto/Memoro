<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MemoriaController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompartilharController;
use App\Http\Controllers\PainelControleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// inicio
Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // perfil de um usuario
    Route::get('/UserProfile/{id}', [PainelControleController::class, 'userProfile'])->name('profile.user');
    // seguir um usuario
    Route::post('/UserProfile/{id}/following', [PainelControleController::class, 'follow'])->name('profile.follow');
    // deixar de seguir um usuario
    Route::post('/UserProfile/{id}/follower', [PainelControleController::class, 'unfollow'])->name('profile.unfollow');
    //curtir memoria compartilhada
    Route::post('/memoria/{id}/like', [CompartilharController::class, 'like'])->name('memorias.like');
    // descurtir memoria
    Route::post('/memoria/{id}/unlike', [CompartilharController::class, 'unlike'])->name('memorias.unlike');

    // painel interno 
    Route::get('/PainelControle', [PainelControleController::class, 'index'])->name('painel');

    // tela do feed
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // form de criar alimento
    Route::post('/alimento', [InventarioController::class, 'store'])->name('alimento.create');
    // criar alimento view
    Route::get('/entradas', [InventarioController::class, 'cadastrarAlimentoView'])->name('alimento.createView');
    // vizualizar alimentos
    Route::get('/inventario', [InventarioController::class, 'index'])->name('alimentos.view');
    // vizualizar um alimento
    Route::get('/alimento/{id}/view', [InventarioController::class, 'AlimentoView'])->name('alimento.view');
    // editar alimento
    Route::get('/alimento/{id}/edit', [InventarioController::class, 'edit'])->name('alimento.edit');
    // update de alimento
    Route::put('/alimento/{id}', [InventarioController::class, 'update'])->name('alimento.update');
    // deletar alimento
    Route::delete('/alimento/{id}', [InventarioController::class, 'destroy'])->name('alimento.destroy');

    // criar memorias view
    Route::get('/novas_memorias', [MemoriaController::class, 'new_memorias']);
    // criar memorias form 
    Route::post('/novasmemorias', [MemoriaController::class, 'storeMemoria'])->name('memoria.create');
    // visualzar memorias 
    Route::get('/memorias', [MemoriaController::class, 'index'])->name('memoria.view');
    // visualzar uma memoria
    Route::get('/memoria/{id}/view', [MemoriaController::class, 'memoriaView'])->name('memoria.show');
    // deletar memoria
    Route::delete('/memoria/{id}', [MemoriaController::class, 'destroy'])->name('memoria.destroy');
    // editar memoria
    Route::get('/memoria/{id}/edit', [MemoriaController::class, 'edit'])->name('memoria.edit');
    // update de memoria
    Route::put('/memoria/{id}', [MemoriaController::class, 'update'])->name('memoria.update');
    // criar avaliação form 
    Route::post('/avaliacao', [AvaliacaoController::class, 'storeAvaliacao'])->name('avaliacao.create');
    // cria um compartilhamento
    Route::post('/compartilhar/{id}', [CompartilharController::class, 'shareMemoria'])->name('memoria.share');


    // criar comentarios
    Route::post('/memorias/{memoria}/comments', [CommentController::class, 'storeComments'])->name('memorias.comments.store');
    // deleetar comentario 
    // criar comentarios
    Route::delete('/memorias/{id}/deleteComment', [CommentController::class, 'destroy'])->name('memorias.comments.destroy');
});

require __DIR__ . '/auth.php';
