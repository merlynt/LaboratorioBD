<?php

namespace App\Models;

use app\Models\Beehives;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BeehiveLocation extends Model
{
    protected $fillable=[
        'location'
        ];
        public function Beehives():HasMany{
            return $this->hasMany(Beehives::class);
        }
}
