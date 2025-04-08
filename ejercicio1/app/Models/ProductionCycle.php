<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class ProductionCycle extends Model
{
    /** @use HasFactory<\Database\Factories\ProductionCycleFactory> */
    use HasFactory;
    protected $fillable=[
        'production_status',
        'start_date',
        'end_date',
        'beehives_id'
    ];
    public function beehives():BelongsTo{
        return $this->belongsTo(Beehives::class);
    }
    public function batches_of_honey():HasMany{
        return $this->hasMany(BatchesOfHoney::class);
    }
}
