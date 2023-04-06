<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intereses extends Model
{
    use HasFactory;
    protected $table = 'intereses';

    public function involucrados()
    {
        //varios intereses pertenecen a involucrados
        return $this->belongsTo(Involucrados::class,'id_involucrado');
    }
}
