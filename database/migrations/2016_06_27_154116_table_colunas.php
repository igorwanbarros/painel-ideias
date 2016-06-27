<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class TableColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colunas', function(Blueprint $tb) {
            $tb->increments('id');
            $tb->string('nome');
            $tb->enum('painel', ['IDEIAS', 'CHECKLISTS', 'NOTAS']);
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
        Schema::drop('colunas');
    }
}
