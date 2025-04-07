<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GerminationHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'seed_id',
        'test_date',
        'germination_rate',
        'germination_conditions',
        'notes'
    ];

    protected $casts = [
        'test_date' => 'datetime',
        'germination_rate' => 'float',
        'germination_conditions' => 'array'
    ];

    // Relación con Seed
    public function seed()
    {
        return $this->belongsTo(Seed::class);
    }

    // Método de consulta común
    public function scopeSuccessful($query)
    {
        return $query->where('germination_rate', '>', 80);
    }
}