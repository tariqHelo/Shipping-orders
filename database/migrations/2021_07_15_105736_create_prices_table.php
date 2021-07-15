<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('normal_shipping');
            $table->string('excellent_mail');
            $table->string('food_shipping');
            $table->string('special_shipping');
            $table->string('express_mail');
            $table->string('Shipping_out');
            $table->string('fast_shipping_out');
            $table->string('normal_shipping_outside');
            $table->string('Special_Premium_Mail_Shipping');
            
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
        Schema::dropIfExists('prices');
    }
}
