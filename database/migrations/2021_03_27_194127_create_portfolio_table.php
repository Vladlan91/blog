<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('region_id')->references('id')->on('region')->onDelete('cascade')->nullable();
            $table->time('data_start_plan')->nullable();
            $table->time('data_start_fact')->nullable();
            $table->time('data_finish_plan')->nullable();
            $table->time('data_finish_fact')->nullable();
            $table->integer('floor_id');
            $table->integer('square');
            $table->integer('price');
            $table->integer('price_two')->nullable();
            $table->string('type')->nullable();
            $table->integer('financial_motivation')->nullable();
            $table->integer('public')->default('0');
            $table->integer('id_client');
            $table->integer('id_manager')->nullable();
            $table->integer('id_technologist')->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio');
    }
}
