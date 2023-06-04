<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->integer('emp_id')->primary()->nullable();
            $table->string('emp_name',50)->nullable();
            $table->string('emp_ph_no',20)->nullable();
            $table->string('emp_address')->nullable();
            $table->string('emp_pwd',200)->nullable();
            $table->integer('flag',1)->nullable();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
