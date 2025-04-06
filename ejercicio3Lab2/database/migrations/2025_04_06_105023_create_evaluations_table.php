<?php

use App\Models\Jury;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Movie;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('plot');
            $table->integer('direction');
            $table->integer('performances');
            $table->integer('cinematography');
            $table->integer('soundtrack');
            $table->integer('editing');
            $table->foreignIdFor(Movie::class)->constrained();
            $table->foreignIdFor(Jury::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
