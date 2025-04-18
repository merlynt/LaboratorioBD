<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeDetail extends Model
{
    use HasFactory;

    protected $fillable = ['exchange_id', 'detail'];
}
