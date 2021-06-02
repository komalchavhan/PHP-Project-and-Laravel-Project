<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myorders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('pincode');
            $table->string('country');
            $table->string('mobile');
            $table->string('payment_method');
            $table->string('grand_total');
            $table->string('status');
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
        Schema::dropIfExists('myorders');
    }
}
