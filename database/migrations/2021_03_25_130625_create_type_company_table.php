<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateTypeCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('company_id');
            $table->foreign('type_id')->references('id')->on('type');
            $table->foreign('company_id')->references('id')->on('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_company');
    }
}
