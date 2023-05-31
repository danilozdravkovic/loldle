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
        Schema::create('champions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('championImg_id');
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('specie_id');
            $table->unsignedBigInteger('resource_id');
            $table->unsignedBigInteger('rangeType_id');
            $table->unsignedBigInteger('region_id');
            $table->integer('releaseYear');
            $table->text('quote');
            $table->timestamps();

            $table->foreign('championImg_id')->references('id')->on('champion_image');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('specie_id')->references('id')->on('species');
            $table->foreign('resource_id')->references('id')->on('resources');
            $table->foreign('rangeType_id')->references('id')->on('range_types');
            $table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champions');
    }
};
