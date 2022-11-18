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
        Schema::create('buggages', function (Blueprint $table) {
            $table->uuid()->unique();
            $table->string('service_fourfive_type');
            $table->string('shipping_type');
            $table->integer('size');
            $table->integer('weight');
            $table->string('location_from');
            $table->string('location_to');
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
        Schema::dropIfExists('buggages');
    }
};
