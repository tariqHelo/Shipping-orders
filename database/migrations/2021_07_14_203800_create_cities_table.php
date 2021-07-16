<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
             $table->string('name');
             $table->string('english_name');
             $table->enum('status' , ['active', 'draft' , 'hidden']);
            //  $table->foreignId("county_id")->nullable();
            //  $table->foreign('county_id')->references('id')->on("countries")->cascadeOnDelete()->cascadeOnUpdate();
             $table->foreignId("area_id")->nullable();
             $table->foreign('area_id')->references('id')->on("areas")->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('cities');
    }
}
