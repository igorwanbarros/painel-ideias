<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class TableCheckList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_list', function(Blueprint $tb) {
            $tb->increments('id');
            $tb->string('titulo');
            $tb->text('descricao');
            $tb->tinyInteger('realizado');
            $tb->integer('parent', false, true)->nullable();
            $tb->timestamps();
            $tb->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('check_list');
    }
}
