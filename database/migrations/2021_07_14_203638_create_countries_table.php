<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
             $table->id();
             $table->string('name');
             $table->string('english_name');
             $table->enum('status' , ['active', 'draft' , 'hidden']);
             $table->foreignId("city_id")->nullable();
             $table->foreign('city_id')->references('id')->on("cities")->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('countries');
    }
}
