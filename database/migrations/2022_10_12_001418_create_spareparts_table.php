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
            $table->foreignId('service_three_type')->constrained('towings')->cascadeOnDelete();
            $table->foreignId('brand')->constrained('brands')->cascadeOnDelete();
            $table->foreignId('modal')->constrained('modals')->cascadeOnDelete();
            $table->string('color');
            $table->integer('plate_number');
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
