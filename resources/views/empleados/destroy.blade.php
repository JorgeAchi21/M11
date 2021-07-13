@extends ('layouts.plantilla')

@section ('title', 'Index')

@section ('content')


<div class="jumbotron">
    
  <p class="text-center h3 text-primary">Registro eliminado:</p>

  <p>El registro con id: <strong>{{$id}}</strong> ha sido eliminado correctamente...</p>

  <a href="{{route('show')}}">Regresar al listado de empleados.</a>
</div>
@endsection
