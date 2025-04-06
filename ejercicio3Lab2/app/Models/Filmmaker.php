<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmmaker extends Model
{
    /** @use HasFactory<\Database\Factories\FilmmakerFactory> */
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'phone',
        'email'
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'distributor_filmmaker_movie');
    }
    public function distributors()
    {
        return $this->belongsToMany(Distributor::class, 'distributor_filmmaker_movie');
    }
}
