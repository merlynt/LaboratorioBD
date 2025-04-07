<?php

use App\Models\Beekeepers;
use App\Models\BeehiveLocation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Location;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_beehives', function (Blueprint $table) {
            $table->id();
            $table->string('beehive_name',50);
            $table->foreignIdFor(BeehiveLocation::class)->constrained();
            $table->foreignIdFor(Beekeepers::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_beehives');
    }
};
