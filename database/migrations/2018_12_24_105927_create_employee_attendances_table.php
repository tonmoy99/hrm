<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_attendances', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('emp_id');
	    $table->string('emp_first_name');
	    $table->string('emp_last_name');
	    $table->string('emp_dept');
	    $table->string('emp_post');
	    $table->string('emp_arrival_time');
	    $table->string('emp_leaving_time');
	    $table->string('date');
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
        Schema::dropIfExists('employee_attendances');
    }
}
