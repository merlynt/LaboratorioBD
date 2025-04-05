<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id(); // Crea un campo 'id'
            $table->string('name'); // Crea un campo 'name' de tipo string
            $table->text('description'); // Crea un campo 'description' de tipo text
            $table->timestamps(); // Esto crea 'created_at' y 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
