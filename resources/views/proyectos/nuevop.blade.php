@extends('layouts.main', ['activePage'=> 'involucrados','titlePage' =>'Nuevo Proyecto'])
<!--  si el $activePage es igual a profile pinte de amarrillo -->
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

        <form action="{{'/proyectos'}}" method="post" class="form-horizontal">
         @csrf 
         <div class="card">
            <div class="card-header card-header-primary">
                <h1 class="car-title"> Crea tu proyecto</h1>
               
                <h4 class="car-title">Ingrese el nombre de tu proyecto</h4>
               
            </div>
            <div class="card-body">
                <div class="row">
                    <label form="name" class="col-sm-2 col-form-larabel">Nombre del proyecto</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control" name="nombre_proyecto" placeholder="" autofocus> 
                    </div>
                </div>
               
                <!-- inicio del footer -->
            <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Crear proyecto</button>
               <div class="row">
                <div class="col-12 text-right">
                    <!--<a href="{{route('involucrados.create')}}" class="btn btn-sm btn-facebook">siguiente</a> -->
                </div>
               </div> 
            </div>
               <!-- fin del footer -->
         </div>
         
        </form>
        </div>
    </div>
  </div>

 </div>
@endsection