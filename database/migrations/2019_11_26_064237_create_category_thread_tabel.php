<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryThreadTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_thread', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('thread_id');
            $table->unsignedInteger('category_id');

            $table->foreign('thread_id')
                ->references('id')->on('threads');

            $table->foreign('category_id')
                ->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_thread');
    }
}
