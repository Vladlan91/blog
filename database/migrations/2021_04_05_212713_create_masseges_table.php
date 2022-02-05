<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMassegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('phone');
            $table->text('email');
            $table->text('massages');
            $table->integer('see')->nullable();
            $table->integer('who_see')->nullable();
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
        Schema::dropIfExists('massages');
    }
}
