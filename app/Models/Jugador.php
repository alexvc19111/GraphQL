<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadores';
    protected $fillable = [
        'nombre',
        'numero',
        'posicion',
        'edad',
        'nacionalidad',
        'goles',
        'equipo_id'
    ];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}
