<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatedGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('related_goods', function (Blueprint $table) {
            $table->integer('one_material_id')->references('id')->on('material')->onDelete('CASCADE');
            $table->integer('two_material_id')->references('id')->on('material')->onDelete('CASCADE');
            $table->primary(['one_material_id', 'two_material_id' ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('related_goods');
    }
}
