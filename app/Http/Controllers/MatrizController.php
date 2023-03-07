<?php

namespace App\Http\Controllers;

use App\Models\Matriz;
use Illuminate\Http\Request;

class MatrizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function matriz(){

        return view('matriz.matriz');
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
    public function show(Matriz $matriz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matriz $matriz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matriz $matriz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matriz $matriz)
    {
        //
    }
}
