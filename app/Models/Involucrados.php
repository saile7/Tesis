<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Involucrados extends Model
{
    use HasFactory;
    //especificar a que tabla esta haciendo referencia
    protected $table = 'involucrado';

    public function crearproyecto()
    {
        // un involucrado pertenece a un proyecto
        return $this->belongsTo(Crearproyecto::class, 'nombre_proyecto' );
    } 
    public function Problemas(){
        //un involucrato tiene varios problemas
        return $this->hasMany(Problemas::class, 'id_problema');
    }
    public function intereses(){
        //un involucrado tiene varios intereses
        return $this->hasMany(Intereses::class,'id_interes');
    }
    public function recursos(){
        //un involucrado tiene varios recursos
        return $this->hasMany(Recursos::class,'id_recurso');
    }
}
