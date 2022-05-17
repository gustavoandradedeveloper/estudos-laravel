<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index($nome){
         $tarefa =  array(
             'nome' => $nome,
             'idade'=> 12
         );
         return view('tarefa',$tarefa);
    }
}
