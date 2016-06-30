<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class TableNotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function(Blueprint $tb) {
            $tb->increments('id');
            $tb->string('titulo');
            $tb->string('descricao')->nullable();
            $tb->tinyInteger('realizado');
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
        Schema::drop('notas');
    }
}
