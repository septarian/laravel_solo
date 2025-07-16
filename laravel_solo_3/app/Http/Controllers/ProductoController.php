<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){

        $productos = Producto::all();

        return view('productos.index', compact('productos'));
    }

    public function guardar(Request $request){

        //validacion basica
        $validated = $request->validate([
            'name'          => 'required|string',
            'description'   => 'required|string',
            'price'         => 'required|string',
        ]);

        Producto::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
        ]);

            return redirect()->route('productos')->with('success', 'Usuario creado con exito');
    }

}
