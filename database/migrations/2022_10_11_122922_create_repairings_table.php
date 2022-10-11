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
        Schema::create('repairings', function (Blueprint $table) {
            $table->uuid()->unique();
            $table->foreignId('service_two_type')->constrained('carwashes')->cascadeOnDelete();
            $table->foreignId('brand')->constrained('brands')->cascadeOnDelete();
            $table->foreignId('modal')->constrained('modals')->cascadeOnDelete();
            $table->string('color');
            $table->integer('plate_number');
            $table->string('location_from');
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
        Schema::dropIfExists('repairings');
    }
};
