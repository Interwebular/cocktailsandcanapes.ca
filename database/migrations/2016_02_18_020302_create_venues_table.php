<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('phonenumber')->nullable();
            $table->text('description')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('image')->nullable();
            $table->integer('rececption_count')->unsigned()->nullable();
            $table->integer('dining_count')->unsigned()->nullable();


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
        Schema::drop('venues');
    }
}
