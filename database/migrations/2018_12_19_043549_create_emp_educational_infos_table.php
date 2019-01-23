<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpEducationalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_educational_infos', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('emp_id');
	    $table->string('ed_year');
	    $table->string('ed_institute');
	    $table->string('ed_department');
	    $table->string('ed_gpa_division');
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
        Schema::dropIfExists('emp_educational_infos');
    }
}
