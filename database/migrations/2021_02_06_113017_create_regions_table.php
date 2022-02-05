<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('region', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('slag');
            $table->string('town_ru')->nullable();
            $table->string('town')->nullable();
            $table->integer('sort')->nullable();
            $table->integer('parent_id')->nullable()->references('id')->on('region')->onDelete('CASCADE');
            $table->timestamps();
            $table->unique(['parent_id','slag']);
            $table->unique(['parent_id','name']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('region');
    }
}
