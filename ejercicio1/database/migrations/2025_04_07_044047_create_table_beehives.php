<?php

use App\Models\BeehiveLocation;
use App\Models\Beekeepers;
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
        Schema::create('beehives', function (Blueprint $table) {
            $table->id();
            $table->integer('beehive_number');
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
