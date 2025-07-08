   <!-- el contenido del template app aparecera arriba del contenido de esta vista-->
   @extends('layouts.app')

    <!-- este conido se mostrara donde este el "@yiel('content') en el template app (el yield debe tener el mismo nombre, osea "content") -->
    @section('content')
    <h1>bienvenidos a laravel 12</h1>
    @endsection