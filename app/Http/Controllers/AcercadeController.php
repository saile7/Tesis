<?php

namespace App\Http\Controllers;

use App\Models\Acercade;
use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
public function acercade(){
    return view(view: 'acercade.acercade');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Acercade $acercade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acercade $acercade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acercade $acercade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acercade $acercade)
    {
        //
    }
}
