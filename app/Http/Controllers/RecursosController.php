<?php

namespace App\Http\Controllers;

use App\Models\Recursos;
use Illuminate\Http\Request;

class RecursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recursos = recursos:: all();
        return view('recursos.recursop');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('involucrados.create');
    }
    
     /**function addInvoluc() {
        var involucCount = document.querySelectorAll('.involuc-input').length;
        var involucTemplate = document.querySelector('#involuc-template').cloneNode(true);
        involucTemplate.querySelector('.involuc-label').innerHTML = 'Involucrado ' + (involucCount + 1);
        involucTemplate.querySelectorAll('.user-input').forEach(function(input) {
          input.name = input.name.replace('[0]', '[' + involucCount + ']');
          input.value = '';
        });
        document.querySelector('#user-container').appendChild(userTemplate);
      }*/
     
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosRecursos = request()->except('_token');
        Recursos::insert($datosRecursos);
        // return response()-> json($datosProyecto);
        // esta es la linea para que regrese asi mismo return view('recursos.recursop');
         return view('recursos.recursop');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recursos $recursos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recursos $recursos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recursos $recursos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recursos $recursos)
    {
        //
    }
}
