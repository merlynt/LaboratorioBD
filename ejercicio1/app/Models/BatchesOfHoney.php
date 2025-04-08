<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BatchesOfHoney extends Model
{
    use HasFactory;

    protected $fillable = [
        'packing_date',
        'cuantity',
        'batch_number',
        'production_cycle_id',
    ];

    public function production_cycle(): BelongsTo
    {
        return $this->belongsTo(Production_cycle::class);
    }
}
