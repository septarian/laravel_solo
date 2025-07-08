<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function index()
    {
        return view('suma', ['res' => null]);
    }
    public function suma(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $res = $num1 + $num2;
        /* con esto puedo ver que es lo que recibe la funcion
        dd($request->all());
        */
        return view('suma', ['resultado' => $res]); #Se hara referencia a la clave de la propiedad del array, en este caso a "resultado" y no a "res"
    }
}
