@extends('layouts.main', ['activePage'=> 'involucrados','titlePage' =>'Recursos'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

        <form action="{{'/recursos'}}" method="post" class="form-horizontal">
         @csrf 
         <div class="card">
            <div class="card-header card-header-primary">
                <h1 class="car-title"> Ingrese los recursos disponibles</h1>
               
                <h4 class="car-title">Recursos disponibles para el proyecto</h4>
                
            </div>
            <!-- inicio del body -->
            <div class="card-body">
                <!--Envia una alerta de que se guardo-->
                @if (session('alert'))
                <div class="alert alert-success" role="alert">
                    {{session('alert')}}
                </div>   
                @endif
                <!--fin de la alerta-->
                <div class="row">
                   
                    <label form="recurso1" class="col-sm-2 col-form-larabel">Recurso número 1</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="recurso1" placeholder="" autofocus> 
                    </div>
                </div>

                <div class="row">
                    <label form="recurso2" class="col-sm-2 col-form-larabel">Recurso número 2</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="recurso2" placeholder="" autofocus> 
                    </div>
                </div>
                <div class="row">
                    <label form="recurso3" class="col-sm-2 col-form-larabel">Recurso número 3</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="recurso3" placeholder="" autofocus> 
                    </div>
                </div>
               <!-- final del footer -->
                <!-- inicio del footer -->
            <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Guardar Recursos</button>
               <div class="row">
                <div class="col-12 text-right">
                    <a href="{{route('involucrados.create')}}" class="btn btn-sm btn-facebook">Agregar mas involucrados</a>
                </div>
               
               </div> 
        
            </div>
               <!-- fin del footer -->
               <!-- inicio de otra-->
              
         </div>
         <!-- siguiente seccion-->
         <div class="card">
            <div class="card-header card-header-primary">
                <a href="{{route('problemas.index')}}" class="btn btn-sm btn-facebook">Ver Arbol de Problemas</a>
               "El arbol de problemas es un resumen de los problemas que se debe resolver en este proyecto".
            </div>
            <!-- inicio del body -->
            <div class="card-body">
                
               
            <div class="card-footer ml-auto mr-auto">
               <div class="row">
               </div>
            </div>
               
            <!--fin de la seccion-->
         </div>
        </form>
        </div>
    </div>
  </div>

 </div>
@endsection