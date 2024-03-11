<?php

use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MemoriaController;
use App\Http\Controllers\ProfileController;
use App\Models\Avaliacao;
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
Route::get('/', [DashboardController::class , 'index']);

// perfil do usuario
Route::get('/profile', [ProfileController::class , 'index']);


// criar alimento form
Route::post('/alimento', [InventarioController::class , 'store'])->name('alimento.create');

// criar alimento view
Route::get('/entradas', [InventarioController::class , 'cadastrarAlimentoView']);

// vizualizar alimentos
Route::get('/inventario', [InventarioController::class , 'index'])->name('alimento.view');



// criar memorias view
Route::get('/novas_memorias', [MemoriaController::class , 'new_memorias']);

// criar memorias form 
Route::post('/novasmemorias', [MemoriaController::class , 'storeMemoria'])->name('memoria.create');

// visualzar memorias 
Route::get('/memorias', [MemoriaController::class , 'index'])->name('memorias');


// criar memorias form 
Route::post('/avaliacao', [AvaliacaoController::class , 'storeAvaliacao'])->name('avaliacao.create');
