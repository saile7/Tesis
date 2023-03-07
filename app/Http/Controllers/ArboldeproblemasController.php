<?php

namespace App\Http\Controllers;

use App\Models\Arboldeproblemas;
use Illuminate\Http\Request;

class ArboldeproblemasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }
 public function arboldeproblemas(){

    return view(view: 'arboldeproblemas.arboldeproblemas');
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
    public function show(Arboldeproblemas $arboldeproblemas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Arboldeproblemas $arboldeproblemas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Arboldeproblemas $arboldeproblemas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arboldeproblemas $arboldeproblemas)
    {
        //
    }
}
