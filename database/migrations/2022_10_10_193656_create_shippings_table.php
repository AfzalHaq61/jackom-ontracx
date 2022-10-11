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
        Schema::create('shippings', function (Blueprint $table) {
            $table->uuid()->unique();
            $table->foreignId('service_one_type')->constrained('towings')->cascadeOnDelete();
            $table->foreignId('brand')->constrained('brands')->cascadeOnDelete();
            $table->foreignId('modal')->constrained('modals')->cascadeOnDelete();
            $table->string('color');
            $table->integer('plate_number');
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
        Schema::dropIfExists('shippings');
    }
};
