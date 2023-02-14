<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'profile_photo_path',
        'Cedula',
        'Correo',
        'Telefono',
        'Observaciones',
    ];

    public function servicios($id) {

        $pivot = Servicio_cliente::where('cliente_id',$id)->pluck('servicio_id');
        return Servicio::WhereIn('id',$pivot)->get();
        // return $this->belongsToMany(Servicio::class,'servicio_clientes');
    }


}
