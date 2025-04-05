<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Seed extends Model
{
    use HasFactory;

    protected $fillable = [
        'scientific_name', 
        'family', 
        'genus', 
        'conservation_status', 
        'description', 
        'registration_date',
    ];

    public function samples()
    {
        return $this->hasMany(Sample::class); 
    }
}

