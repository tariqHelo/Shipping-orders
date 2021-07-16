<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityCountryPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_country', function (Blueprint $table) {
            $table->foreignId("country_id")->nullable();
            $table->foreign('country_id')->references('id')->on("countries")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("city_id")->nullable();
            $table->foreign('city_id')->references('id')->on("cities")->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_country');
    }
}
