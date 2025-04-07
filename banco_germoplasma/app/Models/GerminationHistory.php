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

   
    public function seed()
    {
        return $this->belongsTo(Seed::class);
    }


    public function scopeSuccessful($query)
    {
        return $query->where('germination_rate', '>', 80);
    }
}