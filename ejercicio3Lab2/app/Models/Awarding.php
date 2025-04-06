<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Evaluation;

class Awarding extends Model
{
    /** @use HasFactory<\Database\Factories\AwardingFactory> */
    use HasFactory;

    protected $fillable = [
        'award',
        'award_date',
        'award_description',
        'evaluation_id'
    ];

    public function evaluation():BelongsTo
    {
        return $this->belongsTo(Evaluation::class);
    }
}
