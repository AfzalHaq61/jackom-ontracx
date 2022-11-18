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
        Schema::create('spareparts', function (Blueprint $table) {
            $table->uuid()->unique();
            $table->string('service_three_type');
            $table->string('brand');
            $table->string('modal');
            $table->string('color');
            $table->string('location_from');
            $table->string('location_to');
            $table->integer('car_serial_number');
            $table->integer('copy_of_regestration');
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
        Schema::dropIfExists('spareparts');
    }
};
