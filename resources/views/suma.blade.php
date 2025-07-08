   <!-- el contenido del template app aparecera arriba del contenido de esta vista-->
   @extends('layouts.app')

    <!-- este conido se mostrara donde este el "@yiel('content') en el template app (el yield debe tener el mismo nombre, osea "content") -->
    @section('content')

    <h2>Suma de 2 numeros</h2>
    <form action="/suma" method="POST">
    @csrf

    <label for ="num1">Numero 1:</label>
    <input type="number" name="num1" id="num1" required>
    <br>

    <label for ="num2">Numero 2:</label>
    <input type="number" name="num2" id="num2" required>
    <br>

    <button type="submit">Sumar</button>

    </form>

    @if(isset($resultado))

        <!-- Forma de escribir codigo PHP en html es con doble corchetes de objetos -->
        <h3>El resultado de la suma es: {{$resultado}}</h3>
    
        <!-- Tambien se puede usar esta manera para escribir codigo PHP en html
        El resultado de la suma es: <?=  var_dump($resultado) ?>    -->
    @endif

    @endsection