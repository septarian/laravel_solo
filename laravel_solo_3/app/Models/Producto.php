<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //public $timestamps = false; // ← Esto evita que los intente insertar
    protected $fillable = ['name', 'description', 'price'];
}
