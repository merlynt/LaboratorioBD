<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    protected $fillable =
    [
        'format',
        'description'
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
