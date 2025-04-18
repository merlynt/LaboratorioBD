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
        Schema::create('sanitary_treatments', function (Blueprint $table) {
            $table->id();
            $table->string('treatment_type',75);
            $table->date('aplication_date');
            $table->string('description',100);
            $table->foreignIdFor(Beehives::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_sanitary_treatments');
    }
};