@extends('layouts.main', ['activePage'=> 'involucrados','titlePage' =>'Nuevo Proyecto'])
@section('content')
 <div class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

        <form action="{{'/involucrados'}}" method="post" class="form-horizontal">
         @csrf 
         <div class="card">
          <div class="card-header card-header-primary">
            <h1 class="car-title"> Matriz de involucrados</h1>
        </div>
            
            <div class="card-body">
            <div class="row">
                      <label form="involucrado" class="col-sm-2 col-form-larabel">Nombre Completo del Involucrado</label>
                     <div class="col-sm-7">
                       <input type="text" class="form-control"name="nombre" placeholder="Example Juan Luiz Pindolema EZpinoza" autofocus> 
                    </div>
               </div>
                
                
                <!-- inicio del footer -->
            <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Insertar Involucrado</button>
                <div class="row">
                <div class="col-12 text-right">
                   <!-- <a href="{{route('recursos.recursop')}}" class="btn btn-sm btn-facebook">siguiente</a> -->
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

