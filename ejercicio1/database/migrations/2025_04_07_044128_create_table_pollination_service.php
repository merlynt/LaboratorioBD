<?php

use App\Models\Beehives;
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
        Schema::create('pollination_services', function (Blueprint $table) {
            $table->id();
            $table->string('crops',50);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('conditions');
            $table->foreignIdFor(Beehives::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pollination_services');
    }
};
