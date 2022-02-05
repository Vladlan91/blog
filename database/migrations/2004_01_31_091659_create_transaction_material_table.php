<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('material_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->integer('portfolio_id')->references('id')->on('portfolio')->onDelete('cascade')->nullable();
            $table->integer('provider_id')->references('id')->on('provider')->onDelete('cascade')->nullable();
            $table->integer('months');
            $table->integer('score_id')->nullable();
            $table->integer('year')->nullable();
            $table->integer('count');
            $table->float('sum')->nullable();
            $table->integer('created_user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('transaction_material');
    }
}
