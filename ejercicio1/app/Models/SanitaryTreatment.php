<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SanitaryTreatment extends Model
{
    /** @use HasFactory<\Database\Factories\SanitaryTreatmentFactory> */
    use HasFactory;
    protected $fillable=[
        'treatment_type',
        'aplication_date',
        'description',
        'beehives_id'
    ];
    public function beehives():BelongsTo{
        return $this->belongsTo(Beehives::class,'beehives_id');
    }
}
