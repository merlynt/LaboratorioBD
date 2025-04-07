<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Queens extends Model
{
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
