@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
         </div>
         <div class="card-body" style="padding:30px">

            {{-- TODO: Abrir el formulario e indicar el método POST --}}
            <form action="" method="POST">
            {{ method_field('PUT') }}
               {{ csrf_field() }}

               

               {{-- TODO: Protección contra CSRF --}}

               <div class="form-group">
                  <label for="title">Título</label>
                  <input type="text" name="title" id="title" class="form-control" value="{{$pelicula->title}}"> 
               </div>

               <div class="form-group">
                  <label for="year">Año</label>
                  <input type="text" placeholder="YYYY" name= "year" id="year"  value="{{ $pelicula->year }}">
               </div>

               <div class="form-group">
                  {{-- TODO: Completa el input para el director --}}
                  <label for="director">Director</label>
                  <input type="text" name="director" id="Director" class="form-control" value="{{ $pelicula->director }}">
               </div>

               <div class="form-group">
                  <label for="poster">Poster</label>
                  <input type="text" name="poster" id="poster" class="form-control" value="{{$pelicula->poster}}"/>
                  <img src="{{$pelicula->poster}}" alt="">
                  {{-- TODO: Completa el input para el poster --}}
               </div>

               <div class="form-group">
                  <label for="synopsis">Resumen</label>
                  <textarea name="synopsis" id="synopsis" class="form-control" rows="3" >{{$pelicula->synopsis}}</textarea>
               </div>

               <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                     Añadir película
                  </button>
               </div>

            </form>

            {{-- TODO: Cerrar formulario --}}

         </div>
      </div>
   </div>
</div>
@stop