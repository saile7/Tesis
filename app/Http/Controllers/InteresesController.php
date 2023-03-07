<?php

namespace App\Http\Controllers;

use App\Models\Intereses;
use Illuminate\Http\Request;

class InteresesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $intereses = interes:: all();
        return view('intereses.intereses');
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
        $datosInteres = request()->except('_token');
        Intereses::insert($datosInteres);
        // return response()-> json($datosProyecto);
         return view('recursos.recursop');
    }

    /**
     * Display the specified resource.
     */
    public function show(Intereses $intereses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Intereses $intereses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Intereses $intereses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Intereses $intereses)
    {
        //
    }
}
