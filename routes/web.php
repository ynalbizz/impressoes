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

Route::get('/', function () {
    return "www.vivo.com.br";
});

Route::get('/impressoes', [ImpressoesController::class,"index"]);

Route::get('/criar-impressao', [ImpressoesController::class,"create"]);

Route::post('/impressoes', [ImpressoesController::class,"store"]);