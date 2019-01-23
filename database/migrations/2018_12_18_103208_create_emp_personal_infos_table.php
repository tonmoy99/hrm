<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_personal_infos', function (Blueprint $table) {
	    $table->increments('id');
	    $table->string('emp_first_name');
	    $table->string('emp_last_name');
	    $table->string('emp_father_name');
	    $table->string('emp_mother_name');
	    $table->string('nid');
	    $table->string('emp_nationality');
	    $table->string('emp_gender');
	    $table->string('emp_date_0f_birth');
	    $table->string('emp_marital_status');
	    $table->string('emp_blood_group');
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
        Schema::dropIfExists('emp_personal_infos');
    }
}
