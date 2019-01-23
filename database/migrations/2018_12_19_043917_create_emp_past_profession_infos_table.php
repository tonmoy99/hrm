<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpPastProfessionInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_past_profession_infos', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('emp_id');
	    $table->string('ex_institute');
	    $table->string('ex_duration');
	    $table->string('ex_department');
	    $table->string('ex_position');
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
        Schema::dropIfExists('emp_past_profession_infos');
    }
}
