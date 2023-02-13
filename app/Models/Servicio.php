<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable =[
        'Nombre',
        'Imagen',
        'Tipo_servicio', // (selector con opciones de Básico y Avanzado)
        'Fecha_inicio',
        'Fecha_fin',
        'Observaciones',
        
    ];
}
