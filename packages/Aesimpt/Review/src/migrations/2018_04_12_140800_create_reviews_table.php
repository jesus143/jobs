<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reviewer_id');
            $table->integer('reviewed_id');
            $table->integer('job_user_id')->unsigned();
            $table->integer('job_id')->unsigned();
            $table->string('comment');
            $table->double('english_proficiency');
            $table->double('communication');
            $table->double('timeliness');
            $table->double('reliability');
            $table->double('work_quality');
            $table->double('salary');

            $table->foreign('job_user_id')
                ->references('id')
                ->on('job_users')
                ->onDelete('cascade');

            $table->foreign('job_id')
                ->references('id')
                ->on('jobs')
                ->onDelete('cascade');

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
        Schema::dropIfExists('reviews');
    }
}
