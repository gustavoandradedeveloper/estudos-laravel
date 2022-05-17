<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Route::prefix('/app')->group(function(){

    Route::get('/tarefa/{nome}',[\App\Http\Controllers\TarefaController::class,'index'])->name('site.tarefa');
    Route::get('/categoria',[\App\Http\Controllers\CategoriaController::class,'index'])->name('site.categoria');

});


Route::get('/rota1', function(){
    return redirect()->route('site.tarefa');
});


/* Route::redirect('/rota1','rota2'); */

Route::fallback(function(){
    echo'<h5>Ops essa rota não existe :/</h5>';

});