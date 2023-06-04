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
            $table->bigInteger('id');
            $table->integer('role_id')->nullable();
            $table->integer('dep_id')->nullable();
            $table->integer('emp_id')->nullable();
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
