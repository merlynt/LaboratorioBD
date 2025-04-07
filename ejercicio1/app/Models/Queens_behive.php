<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Queens_behive extends Model
{
    /** @use HasFactory<\Database\Factories\QueensBehiveFactory> */
    use HasFactory;
    protected $fillable=[
        'assignment_date',
        'queens_id',
        'beehives_id'
    ];
    public function queens():BelongsTo{
        return $this->belongsTo(Queens::class);
    }
    public function beehives():BelongsTo{
        return $this->belongsTo(Beehives::class);
    }
}
