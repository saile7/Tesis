<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crearproyecto extends Model
{
    use HasFactory;
    protected $table = 'proyectos';

    public function users() 
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function involucrados()
    {
        return $this->hasMany(Involucrados::class, 'id_involucrado');
    }
} 
