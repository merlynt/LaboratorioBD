<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_production_cycle', function (Blueprint $table) {
            $table->id();
            $table->string('production_status',50);
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignIdFor(Beehive::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_production_cycle');
    }
};
