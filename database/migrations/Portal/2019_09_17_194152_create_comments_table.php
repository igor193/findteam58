<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->integer('parent_id')
              ->unsigned()
              ->default(0);
        $table->text('messege');
        $table->integer('publication');
        $table->timestamps();
    });

        Schema::table('comments', function (Blueprint $table) {
            $table->bigInteger('user_id')
                ->unsigned()
                ->after('id');
            $table->bigInteger('post_id')
                ->unsigned()
                ->after('user_id');
            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
