<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageUserThreads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_user_threads', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('message_thread_id')->unsigned();
            $table->foreign('message_thread_id')
                  ->references('id')->on('message_threads')
                  ->onDelete('cascade');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')->on('users');

            $table->enum('flag', ['none', 'disputed', 'spam', 'suspicous', 'inappropriate', 'completed', 'cancelled'])->default('none');
            
            $table->boolean('is_read')->default(0);
            $table->boolean('is_starred')->default(0);
            $table->boolean('has_response')->default(0);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('message_user_threads');
    }
}
