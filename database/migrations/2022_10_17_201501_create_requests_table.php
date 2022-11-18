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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->integer('user_id');
            $table->string('service_type');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->integer('price')->nullable();
            $table->string('brand')->nullable();
            $table->string('modal')->nullable();
            $table->string('shipping_type')->nullable();
            $table->string('kind')->nullable();
            $table->string('category')->nullable();
            $table->integer('size')->nullable();
            $table->integer('weight')->nullable();
            $table->string('color')->nullable();
            $table->integer('plate_number')->nullable();
            $table->integer('car_serial_number')->nullable();
            $table->integer('copy_of_regestration')->nullable();
            $table->integer('manufacturing_year')->nullable();
            $table->string('regional_specification')->nullable();
            $table->string('paint')->nullable();
            $table->string('chasis_case')->nullable();
            $table->integer('kilo_meters')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('transmission_type')->nullable();
            $table->string('location');
            $table->string('location_to')->nullable();
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
        Schema::dropIfExists('requests');
    }
};
