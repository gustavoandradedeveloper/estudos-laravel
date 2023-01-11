<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    function index(){
        return view('principal');
    }

    function primeiraRota(){
        return 'Bem-vindo a primera rota oficial do sistema!';
    }
}
