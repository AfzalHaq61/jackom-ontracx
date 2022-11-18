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
            $table->string('service_sellcars_type');
            $table->string('category');
            $table->integer('manufacturing_year');
            $table->string('regional_specification');
            $table->string('paint');
            $table->string('chasis_case');
            $table->integer('kilo_meters');
            $table->string('color');
            $table->string('fuel_type');
            $table->string('transmission_type');
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
