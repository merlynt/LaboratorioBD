<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('biodiversity_maps', function (Blueprint $table) {
            $table->id();
            $table->string('location_name');
            $table->float('latitude');
            $table->float('longitude');
            $table->float('altitude');
            $table->string('ecosystem_type');
            $table->datetime('collection_date');
            $table->integer('species_count');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biodiversity_maps');
    }
};