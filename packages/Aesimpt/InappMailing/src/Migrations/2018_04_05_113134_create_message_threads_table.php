<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_threads', function (Blueprint $table) {

            $table->increments('id');
            $table->string('subject')->default('');

            $table->integer('sender_id')->unsigned();
            $table->foreign('sender_id')
                  ->references('id')->on('users');

            $table->integer('receiver_id')->unsigned();
            $table->foreign('receiver_id')
                  ->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_threads');
    }
}
