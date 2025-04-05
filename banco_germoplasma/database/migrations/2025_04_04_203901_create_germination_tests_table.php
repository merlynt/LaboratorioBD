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
        Schema::create('germination_tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sample_id'); // FK a muestras (si aplica)
            $table->date('test_date');
            $table->integer('germinated_seeds');
            $table->integer('total_seeds');
            $table->text('observations')->nullable();
            $table->timestamps();

            // Relación foránea
             $table->foreign('sample_id')->references('id')->on('samples')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('germination_tests');
    }
};
