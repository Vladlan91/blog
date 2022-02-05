<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('unit')->nullable();
            $table->integer('limit')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('related_goods')->nullable();
            $table->integer('count')->nullable();
            $table->integer('sum')->nullable();
            $table->integer('category_id')->references('id')->on('floor_categories')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('material');
    }
}
