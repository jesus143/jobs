<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPreviousWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_previous_work_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('employer_first_name', 50);
            $table->string('company_name', 50);
            $table->string('time_period', 50);
            $table->string('employer_email', 50);
            $table->string('employer_contact_number', 50);
            $table->text('job_description');
            $table->enum('status', ['approved', 'reviewed', 'pending'])->default('pending');

            $table->foreign('user_id')
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
        Schema::dropIfExists('user_previous_work_experiences');
    }
}
