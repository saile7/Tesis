@extends('layouts.main', ['activePage'=> 'involucrados','titlePage' =>'Árbol de problemas'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">

                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Problemas del proyecto</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $problemas as $problema)
                                            
                                                
                                            <tr>
                                                <td>{{$problema-> problema}}</td>
                                                
                                            </tr>
                                        
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>
                            <div class="card-footer mr-auto">
                                {{$problemas->links()}}
                            </div>
                         </div>
                    
                            <div class="text-right">
                                <a href="{{route('arboldeproblemas.arboldeproblemas')}}" class="btn btn-sm btn-facebook">Convertir a Arbol de Objetivos</a>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection