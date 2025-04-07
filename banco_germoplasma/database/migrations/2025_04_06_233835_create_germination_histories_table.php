<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('germination_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seed_id')->constrained();
            $table->date('test_date');
            $table->float('germination_rate');
            $table->json('germination_conditions');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('germination_histories');
    }
};