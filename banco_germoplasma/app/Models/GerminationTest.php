<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GerminationTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'sample_id',         // ID de la muestra relacionada
        'test_date',         // Fecha de la prueba
        'germinated_seeds',  // Cantidad de semillas germinadas
        'total_seeds',       // Total de semillas usadas
        'observations'       // Observaciones adicionales
    ];
}
