<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DentistaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dentista', [DentistaController::class, 'index'])->name('dentista.index');
Route::get('/dentista/cadastro', [DentistaController::class, 'cadastro'])->name('dentista.cadastro');
Route::post('/dentista', [DentistaController::class, 'cadastrar'])->name('dentista.cadastrar');
Route::get('/dentista/{dentista}/edicao', [DentistaController::class, 'edicao'])->name('dentista.edicao');
Route::put('/dentista/{dentista}/editar', [DentistaController::class, 'editar'])->name('dentista.editar');
Route::delete('/dentista/{dentista}/excluir', [DentistaController::class, 'excluir'])->name('dentista.excluir');