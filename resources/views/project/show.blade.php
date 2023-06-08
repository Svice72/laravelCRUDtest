@extends('project.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Projectos</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Projecto : {{ $project->nombreProyecto }}</h5>
        <p class="card-text">Fondos : ${{ $project->montoFondosPropios }}</p>
        <p class="card-text">Patrocinador : {{ $project->fuenteFondos }}</p>
        <p class="card-text">Patrocinio : ${{ $project->montoPatrocinado }}</p>
        <p class="card-text">Monto Planificado : ${{ $project->montoPlanificado }}</p>
  </div>
    </hr>
  </div>
</div>