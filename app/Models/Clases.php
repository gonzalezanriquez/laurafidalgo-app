<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'docente',
        'horario',
        'categoria', 
    ];
}
