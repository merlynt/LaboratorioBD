<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    /** @use HasFactory<\Database\Factories\ExchangeFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description'];
}
