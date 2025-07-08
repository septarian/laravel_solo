<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function() {
    return view('inicio');
});

// Route::get('/suma', function() {
//     return view('suma');
// });

#La manera ideal de llamar la vista de una pagina es con la clase creada en el controlador en lugar de crear la funcion aqui mismo
Route::get('/suma', [SumaController::class,'index']);   #"SumaController es el nombre de la clase y "Index" es el nombre del metodo que retorna la vista suma

Route::post('/suma', [SumaController::class, 'suma']);
