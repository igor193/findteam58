<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('post_id')
                ->unsigned();
            $table->string('name');
            $table->string('path');
            $table->timestamps();
        });

        Schema::table('pictures', function (Blueprint $table) {
            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->onDeleted('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures');
    }
}
