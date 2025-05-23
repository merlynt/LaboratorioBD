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
        Schema::create('filmmakers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('last_name', 45);
            $table->date('birth_date');
            $table->string('phone', 45);
            $table->string('email', 75)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmmakers');
    }
};
