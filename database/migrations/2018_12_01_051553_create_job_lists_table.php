<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_lists', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('job_title');
	    $table->text('job_respons');
	    $table->text('job_require');
	    $table->text('add_require');
	    $table->string('job_type');
	    $table->integer('job_des_id');
	    $table->text('job_location');
	    $table->tinyInteger('status');
	    $table->string('job_dead_line');
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
        Schema::dropIfExists('job_lists');
    }
}
