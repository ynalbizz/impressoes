<?php

use App\Http\Controllers\ImpressoesController;
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

Route::get('/ajuda', function () {
    return view('welcome');
});

Route::get('/', [ImpressoesController::class,"index"]);
Route::get('/impressoes', [ImpressoesController::class,"index"]);
Route::get('/criar-impressao', [ImpressoesController::class,"create"]);
Route::get('/impressoes/{impressao}', [ImpressoesController::class,"show"]);
Route::get('/impressoes/{impressao}/deletar', [ImpressoesController::class,"destroy"]);
Route::get('/impressoes/{impressao}/editar', [ImpressoesController::class,"edit"]);


Route::post('/impressoes', [ImpressoesController::class,"store"]);
Route::post('/impressoes/{impressao}', [ImpressoesController::class,"update"]);
