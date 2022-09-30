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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('name');
            $table->string('nationality');
            $table->string('country');
            $table->string('city');
            $table->string('region');
            $table->integer('registration_number');
            $table->string('comercial_activity');
            $table->string('legal_capacity');
            $table->string('address');
            $table->integer('mobile_number');
            $table->integer('iban');
            $table->integer('account_number');
            $table->string('license_photo_1')->nullable();
            $table->string('license_photo_2')->nullable();
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
        Schema::dropIfExists('providers');
    }
};
