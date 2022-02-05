<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionWageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_wage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->integer('months');
            $table->integer('year')->nullable();
            $table->string('type')->nullable();
            $table->string('type_transaction')->nullable();
            $table->integer('income_expense')->nullable();
            $table->float('sum')->nullable();
            $table->integer('created_user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->string('reason_fine')->nullable();
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
        Schema::dropIfExists('transaction_wage');
    }
}
