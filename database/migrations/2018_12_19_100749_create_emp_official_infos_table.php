<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpOfficialInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_official_infos', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('emp_id');
	    $table->string('emp_dept');
	    $table->string('emp_post');
	    $table->string('joinig_date');
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
        Schema::dropIfExists('emp_official_infos');
    }
}
