<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('company_name');
            $table->string('email');
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('address1');
            $table->string('address2');
            $table->string('zip_code');
            $table->string('country');
            $table->string('state');
            $table->string('confirm_password');
            $table->string('phone_no');
            $table->string('mobile_no');
            $table->string('fax');
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
        Schema::dropIfExists('checkouts');
    }
}