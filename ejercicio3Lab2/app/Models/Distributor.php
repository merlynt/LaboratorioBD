<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    /** @use HasFactory<\Database\Factories\DistributorFactory> */
    use HasFactory;

    protected $fillable =
    [
        'company',
        'phone',
        'email',
        'distribution_type'
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'distributor_filmmaker_movie');
    }
    public function filmmakers()
    {
        return $this->belongsToMany(Filmmaker::class, 'distributor_filmmaker_movie');
    }
}
