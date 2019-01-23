<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpcontactInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empcontact_infos', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('emp_id');
	    $table->string('emp_phone');
	    $table->string('emp_email');
	    $table->string('emp_district');
	    $table->string('emp_city');
	    $table->string('emp_village');
	    $table->string('emp_street');
	    $table->string('emp_postal_code');
	    $table->string('emp_house_no');
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
        Schema::dropIfExists('empcontact_infos');
    }
}
