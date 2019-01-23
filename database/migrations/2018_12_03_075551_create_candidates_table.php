<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('job_post_id');
	    $table->string('candidate_name');
	    $table->string('candidate_email');
	    $table->string('candidate_phone');
	    $table->string('ed_year');
	    $table->string('ed_institute');
	    $table->string('ed_department');
	    $table->string('ed_gpa_division');
	    $table->string('ex_institute');
	    $table->string('ex_duration');
	    $table->string('ex_department');
	    $table->string('ex_position');
	    $table->text('candidate_present_address');
	    $table->text('candidate_parmanent_address');
	    $table->string('expected_salary');
	    $table->tinyInteger('status');
	    $table->text('CV');
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
        Schema::dropIfExists('candidates');
    }
}
