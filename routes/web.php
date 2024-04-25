<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MemoriaController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
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

// painel interno 




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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
    // deletar memoria
    Route::delete('/memoria/{id}', [MemoriaController::class, 'destroy'])->name('memoria.destroy');
    // criar avaliação form 
    Route::post('/avaliacao', [AvaliacaoController::class, 'storeAvaliacao'])->name('avaliacao.create');


    // criar comentarios
    Route::post('/memorias/{memoria}/comments', [CommentController::class, 'storeComments'])->name('memorias.comments.store');
});

require __DIR__ . '/auth.php';
