@extends('project.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Editar Projecto</div>
  <div class="card-body">
       
      <form action="{{ url('project/' .$project->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$project->id}}" id="id" />
        <label>Nombre del projecto</label></br>
        <input type="text" name="nombreProyecto" id="nombreProyecto" value="{{$project->nombreProyecto}}" class="form-control"></br>
        <label>Fuente de los fondos</label></br>
        <input type="text" name="fuenteFondos" id="fuenteFondos" value="{{$project->fuenteFondos}}" class="form-control"></br>
        <label>Monto Planidicado</label></br>
        <input type="number" step="0.01" name="montoPlanificado" id="montoPlanificado" value="{{$project->montoPlanificado}}" class="form-control"></br>
        <label>Monto Patrocinado</label></br>
        <input type="number" step="0.01" name="montoPatrocinado" id="montoPatrocinado" value="{{$project->montoPatrocinado}}" class="form-control"></br>
        <label>Monto Fondos Propios</label></br>
        <input type="number" step="0.01" name="montoFondosPropios" id="montoFondosPropios" value="{{$project->montoFondosPropios}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop