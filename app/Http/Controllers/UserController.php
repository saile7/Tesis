<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function create()
   {
return view(view: 'involucrados.create');

   }
   public function store(Request $request)
   {
  // User::create($request->all());

   }
}
