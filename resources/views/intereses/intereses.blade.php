@extends('layouts.main', ['activePage'=> 'involucrados','titlePage' =>'Intereses'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

        <form action="{{'/intereses'}}" method="post" class="form-horizontal">
         @csrf 
         <div class="card">
            <div class="card-header card-header-primary">
                <h1 class="car-title"> Intereses del involucrado</h1>
               
                
            </div>
            <div class="card-body">
                <div class="row">
                    <label form="interes" class="col-sm-2 col-form-larabel"> interes</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="interes" placeholder="" autofocus> 
                    </div>
                </div>
                <!--<div class="row">
                    <label form="interes" class="col-sm-2 col-form-larabel">segundo interes</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="interes" placeholder="" autofocus> 
                    </div>
                </div>
                <div class="row">
                    <label form="interes" class="col-sm-2 col-form-larabel">tercer interes</label>
                    <div class="col-sm-7">
                       <input type="text" class="form-control"name="interes" placeholder="" autofocus> 
                    </div>
                </div> -->
            
                <!-- inicio del footer -->
             <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Enviar Intereses</button> 
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