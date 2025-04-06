<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Evaluation;

class Jury extends Model
{
    /** @use HasFactory<\Database\Factories\JuryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'profession',
        'experience',
        'specialty'
    ];

    public function evaluations():HasMany
    {
        return $this->hasMany(Evaluation::class);
    }
}
