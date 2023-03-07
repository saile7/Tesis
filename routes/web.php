<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* con estas rutas se llaman desde los ##.blades.php lo que haya ahi*/ 

Route::get('/home', action: [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route:: get('/proyectos/nuevop', action: [App\Http\Controllers\ProyectoController::class, 'nuevop'])
->name('proyectos.nuevop');

Route:: post('/proyectos', action: [App\Http\Controllers\ProyectoController::class, 'STORE'])
->name(name: 'proyectos.store');

Route::get('/involucrados/create', action: [App\Http\Controllers\InvolucradosController::class, 'create'])
->name('involucrados.create'); 

Route:: post('/involucrados', action: [App\Http\Controllers\InvolucradosController::class, 'STORE'])
->name(name: 'involucrados.store');

Route:: get('/problemas/problemasp', action: [App\Http\Controllers\ProblemasController::class, 'problemasp'])
->name(name: 'problemas.problemasp');

Route:: post('/problemas', action: [App\Http\Controllers\ProblemasController::class, 'STORE'])
->name(name: 'problemas.store');

Route:: get('/intereses/intereses', action: [App\Http\Controllers\InteresesController::class, 'intereses'])
->name(name: 'intereses.intereses');

Route:: post('/intereses', action: [App\Http\Controllers\InteresesController::class, 'STORE'])
->name(name: 'intereses.store');

Route:: get('/recursos/recursop', action: [App\Http\Controllers\RecursosController::class, 'recursop'])
->name(name: 'recursos.recursop');

Route:: post('/recursos', action: [App\Http\Controllers\RecursosController::class, 'STORE'])
->name(name: 'recursos.store');

Route:: get('/passwords/login', action: [App\Http\Controllers\LoginController::class, 'create'])
->name(name: 'login.index');

Route:: post('/passwords/login', action: [App\Http\Controllers\LoginController::class, 'store'])
->name(name: 'login.store');

Route:: get('/ayuda/ayudap', action: [App\Http\Controllers\AyudaController::class, 'ayudap'])
->name(name: 'ayuda.ayudap');

Route:: get('/acercade/acercade', action: [App\Http\Controllers\AcercadeController::class, 'acercade'])
->name(name: 'acercade.acercade');

Route:: get('/finalizado/finalizadop', action: [App\Http\Controllers\FinalizadoController::class, 'finalizadop'])
->name(name: 'finalizado.finalizadop');

Route:: get('/enproceso/enprocesop', action: [App\Http\Controllers\EnprocesoController::class, 'enprocesop'])
->name(name: 'enproceso.enprocesop');

Route:: get('/arboldeproblemas/arboldeproblemas', action: [App\Http\Controllers\ArboldeproblemasController::class, 'arboldeproblemas'])
->name(name: 'arboldeproblemas.arboldeproblemas');

Route:: post('/arboldeproblemas', action: [App\Http\Controllers\ArboldeproblemasController::class, 'STORE'])
->name(name: 'arboldeproblemas.store');

Route:: get('ploblemas', action:[App\Http\Controllers\ProblemasController::class, 'index'])
->name(name: 'problemas.index');

Route:: get('/problemas/objetivos', action:[App\Http\Controllers\ProblemasController::class, 'objetivos'])
->name(name: 'problemas.objetivos');

Route:: get('/matriz/matriz', action:[App\Http\Controllers\MatrizController::class, 'matriz'])
->name(name: 'matriz.matriz');

Route:: post('/matriz', action: [App\Http\Controllers\MatrizController::class, 'STORE'])
->name(name: 'matriz.store');