@extends('layouts.main', ['activePage'=> 'involucrados','titlePage' =>'Árbol de Objetivos'])
@section('content')
<div class="content">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Objetivos</th>
                    <th>Objetivos</th>
                    <th>Objetivos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>AAAAAA</th>
                    <th>AAAA</th>
                    <th>AAAA</th>
                </tr>
               
              
            </tbody>
        </table>
        <div class="text-right">
            <a href="{{route('matriz.matriz')}}" class="btn btn-sm btn-facebook">Generar la matriz de marco lógico</a>
          
        </div>
    </div>
</div>


@endsection