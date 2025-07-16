@extends('layouts.app')

@section('content')

<div>
    <h2>Registro de productos </h2>
</div>

<section class="p-5">
    <form action="/productos" method="POST" class="d-flex flex-column">
        @csrf
        <label for="name">Nombre del producto
        <input type="text" name="name" id="name">

        <label for="description">Agrega una descripcion</label>
        <input type="text" name="description" id="description">

        <label for="price">Precio</label>
        <input type="number" name="price" id="price">

        <button type="submit" class="btn btn-success">Enviar</button>

    </form>
</section>

<section class="d-flex  w-75">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <th>{{ $producto['id'] }}</th>
                    <th>{{ $producto['name'] }}</th>
                    <th>{{ $producto['description'] }}</th>
                    <th>{{ $producto['price'] }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@endsection