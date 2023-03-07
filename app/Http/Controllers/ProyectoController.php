<?php

namespace App\Http\Controllers;
use App\Models\Crearproyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
   public function create(){
      return view('proyectos.nuevop');

   }
  
    public function index()
    {

      $proyectos = proyectos::all();
     return view('proyectos.nuevop');
    }
    public function nuevop()
    {
    
 return view('proyectos.nuevop');
 
    }
    public function store(Request $request)
   {
      //$datosProyecto= request()->all();
     $datosProyecto = request()->except('_token');
     Crearproyecto::insert($datosProyecto);
     // return response()-> json($datosProyecto);
      return view('involucrados.create');

   }
}
