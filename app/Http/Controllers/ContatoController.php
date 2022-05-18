<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        echo'<pre>';
        print_r($_POST);
        echo'</pre>';
        return view('contato', ['titulo'=>'Contato']);
    }

}
