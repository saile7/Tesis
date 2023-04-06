<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arboldeproblemas extends Model
{
    use HasFactory;
    protected $table = 'arboldeproblemas';

   
    public function problemas(){
        //un arbol de problemas tiene varios problemas
        return $this->hasMany(Problemas::class,'id_problema');
    }
}
