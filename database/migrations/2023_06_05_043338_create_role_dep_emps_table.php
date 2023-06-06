<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleDepEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_dep_emps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('department_id')->unsigned();
            $table->bigInteger('employee_id')->unsigned();
        });

        Schema::table('role_dep_emps', function($table) {
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_dep_emps');
    }
}
