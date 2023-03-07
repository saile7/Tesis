@extends('layouts.main', ['activePage'=> 'involucrados','titlePage' =>'Árbol de Objetivos'])
@section('content')
<div class="content">
    <div class="row">
        <table class="table">
           
                <tr>
                    <th>Jerarquia de objetivos</th>
                    <th>Metas</th>
                    <th>Indicadores</th>
                    <th>Fuentes de verificación</th>
                    <th>Supuestos</th>
                </tr>
         
            
               <tr>
                 <th>Fin</th> 
                </tr>
               <tr>
                <th>Proposito</th>
                </tr>
               <tr>
                <th>Resultados</th> 
                </tr>
               <tr>
                <th>Acciones</th> 
                </tr>
              
            
        </table>
        <div class="text-right">
            <a href="{{route('matriz.matriz')}}" class="btn btn-sm btn-facebook">Imprimir la matriz de marco lógico</a>
          
        </div>
    </div>
</div>


@endsection