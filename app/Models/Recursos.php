<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    use HasFactory;
    protected $table = 'recursos';

    public function involucrados()
    {
        //un recurso pertenese a un involucrado
        return $this->belongsTo(Involucrados::class, 'id_involucrado');
    }
}
