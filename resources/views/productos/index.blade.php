@extends('layouts.app')

@section('content')

<h1>Lista de productos en la base de datos</h1>

<table class="table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <!--Foreach en sintaxis blade para iterar sobre el objeto "$productos" que tiene toda la informacion de la tabla -->
        @foreach ($productos as $producto)

        <tr>
            <td class ="p-3">{{ $producto->id }}</td>
            <td class ="p-3">{{ $producto->nombre }}</td>
            <td class ="p-3">{{ $producto->precio }}</td>
            <td class ="p-3">{{ $producto->descripcion }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection