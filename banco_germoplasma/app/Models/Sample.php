<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;

    protected $fillable = [
        'seed_id',
        'collection_location',
        'collection_date',
        'quantity',
        'description'
    ];

    protected $casts = [
        'collection_date' => 'date',
        'quantity' => 'integer'
    ];

    public function seed()
    {
        return $this->belongsTo(Seed::class);
    }
}
