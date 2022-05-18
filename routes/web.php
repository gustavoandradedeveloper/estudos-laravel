<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
});



Route::prefix('super-gestao')->group(function(){

    Route::get('/principal',[PrincipalController::class,'index' ])->name('site.index');
    Route::get('/sobre-nos',[SobreNosController::class,'index'])->name('site.sobrenos');
    Route::get('/contato',[ContatoController::class,'index'])->name('site.contato');
});

Route::prefix('super-gestao')->group(function(){

    Route::post('/contato',[ContatoController::class,'index'])->name('site.contato');
});




/* Route::prefix('/app')->group(function(){

    Route::get('/tarefa/{nome}',[\App\Http\Controllers\TarefaController::class,'index'])->name('site.tarefa');
    Route::get('/categoria',[\App\Http\Controllers\CategoriaController::class,'index'])->name('site.categoria');

}); */


/* Route::fallback(function(){
    echo'<h5>Ops essa rota não existe :/</h5>';

}); */