<?php

use App\Models\Queens;
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
        Schema::create('queens_beehives', function (Blueprint $table) {
            $table->id();
            $table->date('assignment_date');
            $table->foreignIdFor(Queens::class)->constrained();
            $table->foreignIdFor(Beehives::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla_queens_beehives');
    }
};