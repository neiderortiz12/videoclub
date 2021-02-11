@extends('layouts.master')
    @section('content')
    <div class="row">       
     <div class="col-sm-auto">           
        <img src="{{$pelicula->poster}}" style="height:400px"/>       
     </div>      
     <div class="col-sm-6">           
        <h2>{{$pelicula->title}}</h2> <br>
        <h4>Año: {{$pelicula->year}}</h4><br>
        <h4>Director: {{$pelicula->director}}</h4><br>
        <h5>Resumen: {{$pelicula->synopsis}}</h5> 
        @if ($pelicula->rented == false)
            <h4>Estado: Pelicula disponible</h4><br>
            <button class="btn btn-success" >Alquilar Pelicula</button>
        @elseif ($pelicula->rented == True)
            <h4>Estado: Pelicula actualmente alquilada</h4><br>
            <button class="btn btn-danger" >Devolver Pelicula</button>
        @endif
        <a class="btn btn-warning" href="{{ url('/catalog/edit/' . $pelicula->id) }}" style="color:white"> <i class="fas fa-pencil-alt"></i> Editar Pelicula</a>   
        <a class="btn btn-light" href="{{ url('/') }}" >  <i class="fas fa-angle-left"></i> Volver al listado</a>
     </div> 
</div>

@stop