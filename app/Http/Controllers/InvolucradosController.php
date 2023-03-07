<?php

namespace App\Http\Controllers;

use App\Models\Involucrados;
use Illuminate\Http\Request;

class InvolucradosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $involucrados = involucrados::all();
     return view('involucrados.create');
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
        $datosInvolucrados = request()->except('_token');
        Involucrados::insert($datosInvolucrados);
        // return response()-> json($datosProyecto);
         return view('problemas.problemasp');
    }

    /**
     * Display the specified resource.
     */
    public function show(Involucrados $involucrados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Involucrados $involucrados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Involucrados $involucrados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Involucrados $involucrados)
    {
        //
    }
}
