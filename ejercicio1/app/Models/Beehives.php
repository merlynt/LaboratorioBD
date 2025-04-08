<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Beehives extends Model
{
    /** @use HasFactory<\Database\Factories\BeehivesFactory> */
    use HasFactory;
    protected $fillable = [
        'beehive_number',
        'beehive_locations_id',
        'beekeepers_id',
        ];
        public function beehive_locations():BelongsTo
        {
        return $this->belongsTo(BeehiveLocation::class);       
        }
        public function beekeepers():BelongsTo
        {
        return $this->belongsTo(Beekeepers::class);
        }
        public function sanitary_treatment():HasMany{
            return $this->hasMany(SanitaryTreatment::class);
        }
        public function production_cycle():HasMany{
            return $this->hasMany(ProductionCycle::class);
        }
        public function pollination_services():HasMany{
            return $this->hasMany(PollinationService::class);
        }
        public function queens_beehive():HasMany{
            return $this->hasMany(Queens_behive::class);
        }
}
