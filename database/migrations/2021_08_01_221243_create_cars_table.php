<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
             $table->string('vehicle_type');
             $table->string('model');
             $table->string('chassis_number');
             $table->string('vehicle_class');
             $table->integer('vehicle_no');
             $table->string('licensing_authority');
             $table->string('property_type');
             $table->integer('traffic_code');
             $table->date('registration_date');
             $table->date('registration_end_date');
             $table->date('insurance_date');
             $table->date('insurance_expiry_date');
             $table->string('insurance_company');
             $table->string('ownership_photo');
             $table->string('salik_tag_number');
             $table->string('Traffic_toll_card_number');
             $table->string('passing_card_number');
             $table->longText('note');
             $table->enum('status' , ['Working', 'Damaged' , 'Garage' , 'Discontinued'])->default('Working');
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
        Schema::dropIfExists('cars');
    }
}
