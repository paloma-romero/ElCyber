<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarForm1;

class ControladorPagina extends Controller
{
    function fHome(){
        return view('home');
    }

    function fFormulario(){
        return view('formulario');
    }
    function fConsulta(){
        return view('consulta');
    }

    public function procesar(validarForm1 $req){
        return redirect('formulario')->with('confirmacion','Datos recibidos');
    }
    
}
