<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Screening;

class Auditorium extends Model
{
    /** @use HasFactory<\Database\Factories\AuditoriumFactory> */
    use HasFactory;

    protected $fillable = [
        'auditorium_number',
        'capacity',
        'status',
        'Location'
    ];

    public function screenings():HasMany
    {
        return $this->hasMany(Screening::class);
    }
}
