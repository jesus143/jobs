<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->string('title', 150);
            $table->text('description');
            $table->string('position', 150);
            $table->double('salary');
            $table->text('skills');
            $table->string('type', 150); // full time, part time
            $table->string('hours', 150);
            $table->enum('status', ['active', 'draft', 'completed', 'archived'])->default('active'); // full time, part time

            $table->foreign('employer_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('jobs');
    }
}
