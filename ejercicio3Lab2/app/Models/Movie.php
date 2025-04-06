<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Screening;

class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'synopsis',
        'duration',
        'publication_date'
    ];

    public function screenings():HasMany
    {
        return $this->hasMany(Screening::class);
    }

    public function evaluations():HasMany
    {
        return $this->hasMany(Evaluation::class);
    }
    
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function formats()
    {
        return $this->belongsToMany(Format::class);
    }
}
