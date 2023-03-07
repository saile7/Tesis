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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosRecursos = request()->except('_token');
        Recursos::insert($datosRecursos);
        // return response()-> json($datosProyecto);
         return view('recursos.recursop')-> with('alert','Recurso Guardado correctamente');
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
