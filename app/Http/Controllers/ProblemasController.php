<?php

namespace App\Http\Controllers;

use App\Models\Problemas;
use Illuminate\Http\Request;

class ProblemasController extends Controller
{
    
    public function index()
    {
        $problemas['problemas']=Problemas::paginate(5);
        return view('problemas.index',$problemas);
    }

        
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosProblemas = request()->except('_token');
        Problemas::insert($datosProblemas);
        // return response()-> json($datosProyecto);
         return view('intereses.intereses');
    }
    public function objetivos(){
        
    }
    /**
     * Display the specified resource.
     */
    public function show(Problemas $problemas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Problemas $problemas)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Problemas $problemas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Problemas $problemas)
    {
        //
    }
}
