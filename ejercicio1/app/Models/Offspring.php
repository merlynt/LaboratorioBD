<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offspring extends Model
{
    protected $fillable=[
        'daugther_bees',
        'queens_id'
    ];

    public function queens():BelongsTo{
        return $this->belongsTo(Queens::class);
    }
}
