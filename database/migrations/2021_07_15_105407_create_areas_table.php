<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('english_name');
            $table->enum('status' , ['active', 'draft' , 'hidden']);
            $table->integer('normal_shipping');
            $table->integer('excellent_mail');
            $table->integer('food_shipping');
            $table->integer('special_shipping');
            $table->integer('express_mail');
            $table->integer('Shipping_out');
            $table->integer('fast_shipping_out');
            $table->integer('normal_shipping_outside');
            $table->integer('Special_Premium_Mail_Shipping');
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
        Schema::dropIfExists('areas');
    }
}
