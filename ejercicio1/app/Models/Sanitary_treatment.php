<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sanitary_treatment extends Model
{
    protected $fillable=[
        'treatment_type',
        'aplication_date',
        'description',
        'beehive_id'
    ];
    public function beehives():BelongsTo{
        return $this->belongsTo(Beehives::class);
    }
}
