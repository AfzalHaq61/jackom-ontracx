<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->uuid()->unique();
            $table->foreignId('service_sellcars_type')->constrained('sells')->cascadeOnDelete();
            $table->foreignId('category')->constrained('categories')->cascadeOnDelete();
            $table->integer('manufacturing_year');
            $table->string('regional_specification');
            $table->string('paint');
            $table->string('chasis_case');
            $table->integer('kilo_meters');
            $table->string('color');
            $table->foreignId('fuel_type')->constrained('fueltypes')->cascadeOnDelete();
            $table->foreignId('transmission_type')->constrained('transmissiontypes')->cascadeOnDelete();
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->string('location');
            $table->string('upload_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
