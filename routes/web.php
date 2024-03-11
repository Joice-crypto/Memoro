<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MemoriaController;
use App\Http\Controllers\ProfileController;
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



Route::get('/', [DashboardController::class , 'index']);

// perfil do usuario
Route::get('/profile', [ProfileController::class , 'index']);

// vizualizar memorias
Route::get('/entradas', [MemoriaController::class , 'index']);

// criar memorias
Route::get('/novas_memorias', [MemoriaController::class , 'new_memorias']);

// criar alimento
Route::post('/alimento', [InventarioController::class , 'store'])->name('alimento.create');

// vizualizar alimentos
Route::get('/inventario', [InventarioController::class , 'index'])->name('alimento.view');





