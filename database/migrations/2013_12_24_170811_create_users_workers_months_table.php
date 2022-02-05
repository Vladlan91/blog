<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersWorkersMonthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_workers_months', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->integer('months');
            $table->integer('year');
            $table->integer('number_of_days')->nullable();
            $table->integer('premium')->nullable();
            $table->integer('fine')->nullable();
            $table->integer('wage')->nullable();
            $table->integer('accrued_with_taxes')->nullable();
            $table->integer('received_on_the_card')->nullable();
            $table->integer('total')->nullable();
            $table->integer('residual')->nullable();
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
        Schema::dropIfExists('users_workers_months');
    }
}
