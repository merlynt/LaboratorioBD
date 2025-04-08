<?php

use App\Models\ProductionCycle;
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
        Schema::create('batches_of_honeys', function (Blueprint $table) {
            $table->id();
            $table->date('packing_date');
            $table->decimal('cuantity', 12,2);
            $table->integer('batch_number');
            $table->foreignIdFor(ProductionCycle::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches_of_honeys');
    }
};