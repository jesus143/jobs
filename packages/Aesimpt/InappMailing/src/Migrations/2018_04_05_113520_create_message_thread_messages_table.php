<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageThreadMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_thread_messages', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('message_thread_id')->unsigned();
            $table->foreign('message_thread_id')
                  ->references('id')->on('message_threads')
                  ->onDelete('cascade');

            $table->integer('sender_id')->unsigned();
            $table->foreign('sender_id')
                  ->references('id')->on('users');

            $table->text('body');

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
        Schema::dropIfExists('message_thread_messages');
    }
}
