<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class TableIdeiaTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideia_tag', function(Blueprint $tb) {
            $tb->integer('ideia_id', false, true);
            $tb->foreign('ideia_id')->references('id')->on('ideia');
            $tb->integer('tag_id', false, true);
            $tb->foreign('tag_id')->references('id')->on('tag');
            $tb->string('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ideia_tag');
    }
}
