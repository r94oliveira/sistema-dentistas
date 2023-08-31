<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DentistaController;
use App\Http\Controllers\EspecialidadeController;

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

Route::get('/especialidade', [EspecialidadeController::class, 'index'])->name('especialidade.index');
Route::get('/especialidade/cadastro', [EspecialidadeController::class, 'cadastro'])->name('especialidade.cadastro');
Route::post('/especialidade', [EspecialidadeController::class, 'cadastrar'])->name('especialidade.cadastrar');
Route::get('/especialidade/{especialidade}/edicao', [EspecialidadeController::class, 'edicao'])->name('especialidade.edicao');
Route::put('/especialidade/{especialidade}/editar', [EspecialidadeController::class, 'editar'])->name('especialidade.editar');
Route::delete('/especialidade/{especialidade}/excluir', [EspecialidadeController::class, 'excluir'])->name('especialidade.excluir');