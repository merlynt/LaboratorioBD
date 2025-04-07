<?php

use App\Models\Queens;
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
        Schema::create('tabla_offspring', function (Blueprint $table) {
            $table->id();
            $table->string('daugther_bees',45);
            $table->foreignIdFor(Queens::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla_offspring');
    }
};
