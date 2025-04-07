<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorageCondition extends Model
{
    use HasFactory;

    protected $fillable = [
        'temperature',
        'humidity',
        'light_exposure',
        'container_type',
        'storage_date',
        'notes'
    ];

    protected $casts = [
        'storage_date' => 'datetime',
        'temperature' => 'float',
        'humidity' => 'float'
    ];
}