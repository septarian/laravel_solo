<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        
        $productos = Producto::all();    //muestra todos los productos

        return view('productos.index', compact('productos'));   //compact es la variable que regresa, en este caso regresa todos los productos
    }
}
