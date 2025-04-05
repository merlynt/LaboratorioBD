<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',     // Ubicación del almacenamiento
        'type',         // Tipo de almacenamiento (ej. frío, seco, etc.)
        'capacity'      // Capacidad del almacenamiento
    ];

    // Relación ejemplo (si guarda muestras)
    public function samples()
    {
        return $this->hasMany(Sample::class);
    }
}