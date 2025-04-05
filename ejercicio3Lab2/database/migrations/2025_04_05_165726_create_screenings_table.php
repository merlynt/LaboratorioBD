<?php

use App\Models\Auditorium;
use App\Models\Movie;
use App\Models\Equipment;
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
        Schema::create('screenings', function (Blueprint $table) {
            $table->id();
            $table->string('audience', 45);
            $table->date('start_date');
            $table->time('screening_time');
            $table->decimal('ticket_price', 12, 2);
            $table->foreignIdFor(Movie::class)->constrained();
            $table->foreignIdFor(Auditorium::class)->constrained();
            $table->foreignIdFor(Equipment::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('screenings');
    }
};
