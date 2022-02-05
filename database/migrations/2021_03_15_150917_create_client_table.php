<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('avtor')->nullable();
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('insta', 40);
            $table->string('comments', 40);
            $table->integer('company_id')->references('id')->on('company')->onDelete('cascade')->nullable();
            $table->integer('region_id')->references('id')->on('region')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('client');
    }
}
