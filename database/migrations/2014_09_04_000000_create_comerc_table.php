<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComercTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comercial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('region_id')->references('id')->on('region')->onDelete('cascade')->nullable();
            $table->string('address')->nullable();;
            $table->integer('top_object')->nullable();
            $table->integer('user_id')->references('id')->on('region')->onDelete('cascade')->nullable();
            $table->integer('price')->nullable();
            $table->integer('price2')->nullable();
            $table->integer('square')->nullable();;
            $table->integer('square2')->nullable();;
            $table->string('baseboard')->nullable();;
            $table->string('damfer')->nullable();;
            $table->string('rosette')->nullable();;
            $table->string('light')->nullable();
            $table->string('toilet')->nullable();;
            $table->integer('floor_id')->nullable();
            $table->integer('floor_type')->nullable();
            $table->integer('floor_quality')->nullable();
            $table->string('name_company')->nullable();
            $table->string('usreou')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('comercial');
    }
}
