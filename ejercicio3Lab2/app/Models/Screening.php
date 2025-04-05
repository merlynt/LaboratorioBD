<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Movie;

class Screening extends Model
{
    /** @use HasFactory<\Database\Factories\ScreeningFactory> */
    use HasFactory;
    protected $fillable = [
        'audience',
        'start_date',
        'screening_time',
        'ticket_price',
        'movie_id',
        'auditorium_id',
        'equipment_id',
    ];

    public function movie():BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }

    public function auditorium():BelongsTo
    {
        return $this->belongsTo(Auditorium::class);
    }
    public function equipment():BelongsTo
    {
        return $this->belongsTo(Equipment::class);
    }

}
