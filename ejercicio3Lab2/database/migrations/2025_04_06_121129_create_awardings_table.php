<?php

use App\Models\Evaluation;
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
        Schema::create('awardings', function (Blueprint $table) {
            $table->id();
            $table->string('award', 45);
            $table->date('award_date');
            $table->text('award_description');
            $table->foreignIdFor(Evaluation::class)->constrained();
            $table->timestamps();
        });
    }
  
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awardings');
    }
};
