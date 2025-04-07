<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pollination_service extends Model
{
    protected $fillable=[
        'crops',
        'start_date',
        'end_date',
        'conditions',
        'beehives_id'
    ];
    public function beehives():BelongsTo{
        return $this->belongsTo(Beehives::class);
    }
}
