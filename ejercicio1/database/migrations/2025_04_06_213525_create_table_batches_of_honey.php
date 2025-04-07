<?php

use App\Models\Production_cycle;
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
        Schema::create('table_batches_of_honey', function (Blueprint $table) {
            $table->id();
            $table->date('packing_date');
            $table->decimal('cuantity', (12.2));
            $table->integer('batch_number');
            $table->foreignIdFor(Production_cycle::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_batches_of_honey');
    }
};
