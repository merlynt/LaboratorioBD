<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BeehiveLocation extends Model
{
    /** @use HasFactory<\Database\Factories\BeehiveLocationFactory> */
    use HasFactory;
    protected $fillable=[
        'location'
        ];
        public function Beehives():HasMany{
            return $this->hasMany(Beehives::class);
        }

}
