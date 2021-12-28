<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_stores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->index()->comment('Идентификатор категории');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name', 255)->comment('Название');
            $table->string('countryoforigin', 255)->comment('Страна производитель');
            $table->string('manufacturercompany', 255)->comment('Фирма производитель');
            $table->string('colour', 255)->comment('Цвет');
            $table->integer('price')->comment('Цена');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music_stores');
    }
}
