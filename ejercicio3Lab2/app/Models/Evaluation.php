<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Movie;

class Evaluation extends Model
{
    /** @use HasFactory<\Database\Factories\EvaluationFactory> */
    use HasFactory;

    protected $fillable = [
        'plot',
        'direction',
        'performances',
        'cinematography',
        'soundtrack',
        'editing',
        'jury_id',
        'movie_id'
    ];

    public function jury():BelongsTo
    {
        return $this->belongsTo(Jury::class);
    }

    public function movie():BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }

    public function awardings():HasMany
    {
        return $this->hasMany(Awarding::class);
    }
}
