@extends('layouts.main', ['activePage'=> 'involucrados','titlePage' =>'Problemas'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

        <form action="{{'/problemas'}}" method="post" class="form-horizontal">
         @csrf 
         <div class="card">
            <div class="card-header card-header-primary">
                <h1 class="car-title"> Problemas encontrados por el involucrado</h1>
               
                
            </div>
            <div class="card-body">
                <div class="row">
                    <label form="problema1" class="col-sm-2 col-form-larabel">Problemas 1</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="problema1" placeholder="" autofocus> 
                    </div>
                </div>
                <div class="row">
                    <label form="problema2" class="col-sm-2 col-form-larabel">Problemas 2</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="problema2" placeholder="" autofocus> 
                    </div>
                </div>
                <div class="row">
                    <label form="problema3" class="col-sm-2 col-form-larabel">Problemas 3</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="problema3" placeholder="" autofocus> 
                    </div>
                </div>
            
                <!-- inicio del footer -->
             <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Enviar problemas</button> 
               <div class="row">
                <div class="col-12 text-right">
                    <!--<a href="{{route('involucrados.create')}}" class="btn btn-sm btn-facebook">siguiente</a>-->
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