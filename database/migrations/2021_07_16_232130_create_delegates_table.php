<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelegatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delegates', function (Blueprint $table) {
            $table->id();
            $table->string('nationality');
            $table->string('image');
            $table->date('work_start');
            $table->string('license');
            $table->string('license_expiry');
            $table->string('phone');
            $table->string('id_number');
            $table->string('id_expiry');
            $table->string('id_image');
            $table->string('passport');
            $table->string('passport_expiry');
            $table->string('passport_image');
            $table->string('residence_expiry');
            $table->string('residence_image');
            $table->string('delivery_commission');
            $table->string('receipt_ommission');
            $table->string('password');
            $table->enum('status' , ['active', 'draft' , 'hidden']);
            $table->foreignId('user_id')->constrained();
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->default(2);
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
        Schema::dropIfExists('delegates');
    }
}
