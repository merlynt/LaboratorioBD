<?php

namespace App\Models;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sample extends Model
{
    use HasFactory;

    protected $fillable = [
        'accession_number',
        'collection_date',
        'location',
        'collector_name',
        'description'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
