<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problemas extends Model
{
    use HasFactory;
    protected $table = 'problemas';

    public function involucrados()
    {
        return $this->belongsTo(Involucrados::class,'id_involucrado');
    }
    public function arboldeproblemas()
    {
        return $this->belongsTo(Arboldeproblemas::class,'id_arbol');
    }
}  
