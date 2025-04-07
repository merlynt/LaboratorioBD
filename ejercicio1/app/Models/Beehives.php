<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Beehives extends Model
{
    protected $fillable = [
    'beehive_name',
    'beehive_location_id',
    'beekepers_id'
    ];
    public function beehive_location():BelongsTo
    {
    return $this->belongsTo(BeehiveLocation::class);       
    }
    public function beekepers():BelongsTo
    {
    return $this->belongsTo(Beekeepers::class);
    }
    public function sanitary_treatment():HasMany{
        return $this->hasMany(Sanitary_treatment::class);
    }
    public function production_cycle():HasMany{
        return $this->hasMany(Production_cycle::class);
    }
    public function pollination_service():HasMany{
        return $this->hasMany(Pollination_service::class);
    }
    public function queens_beehive():HasMany{
        return $this->hasMany(Queens_behive::class);
    }
}
