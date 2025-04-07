<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offspring extends Model
{
    /** @use HasFactory<\Database\Factories\OffspringFactory> */
    use HasFactory;
    protected $fillable=[
        'daugther_bees',
        'queens_id'
    ];

    public function queens():BelongsTo{
        return $this->belongsTo(Queens::class);
    }
}
