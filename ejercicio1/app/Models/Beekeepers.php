<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Beekeepers extends Model
{
    /** @use HasFactory<\Database\Factories\BeekeepersFactory> */
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number'
    ];
    public function beehives():HasMany
    {
        return $this->hasMany(Beehives::class);
    }
}
