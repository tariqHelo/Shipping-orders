<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaCityPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_city', function (Blueprint $table) {
           $table->foreignId("city_id")->nullable();
           $table->foreign('city_id')->references('id')->on("cities")->cascadeOnDelete()->cascadeOnUpdate();
           $table->foreignId("area_id")->nullable();
           $table->foreign('area_id')->references('id')->on("areas")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_city');
    }
}
