<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('avtor')->nullable();
            $table->string('name', 40);
            $table->string('slug');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->string('logo', 40)->nullable();
            $table->string('type', 40)->nullable();
            $table->string('insta', 40);
            $table->string('face', 40)->nullable();
            $table->string('site', 40)->nullable();
            $table->string('email')->unique();
            $table->integer('region_id')->references('id')->on('region')->onDelete('cascade')->nullable();
            $table->string('text')->nullable();
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
        Schema::dropIfExists('company');
    }
}
