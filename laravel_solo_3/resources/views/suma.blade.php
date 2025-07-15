@extends('layouts.app')

@section('content')

<h1>Sumar numeros</h1>

    <form action="/suma" method="POST" class="d-flex flex-column justify-items-center align-items-center gap-2">
        @csrf

        <label for="num1">Primer numero</label>
        <input type="number" name="num1" id="num1" class="form-control-sm" required>

        <label for="num2">Segundo numero</label>
        <input type="number" name="num2" id="num2" class="form-control-sm " required>

        <button type="submit" class="btn btn-outline-info btn-sm mt-1">Sumar</button>
    </form>

    @if(isset($resultado))
        <div class="mt-2">
            <span> El resultado es: <strong class="text-success"> <?=$resultado?> </strong></span>
        </div>

    @endif

    @endsection
