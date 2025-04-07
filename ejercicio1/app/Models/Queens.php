<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Queens extends Model
{
    /** @use HasFactory<\Database\Factories\QueensFactory> */
    use HasFactory;
    protected $fillable=[
        'genetic_code',
        'origin',
        'birthdate'
    ];
    public function queens_beehives() : HasMany {
        return $this->hasMany(Queens_behive::class);
    }
    public function offspring(): HasMany{
        return $this->hasMany(Offspring::class);
    }
}
