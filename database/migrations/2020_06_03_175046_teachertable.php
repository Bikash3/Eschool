<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('emp_id');
            // $table->string('name');
            // $table->string('address');
            // $table->char('gender');
            // $table->char('emp_type');
            $table->char('subject')->nullable();
            $table->char('status');
            // $table->integer('phone');
            // $table->string('email');
            // $table->string('password');
            $table->rememberToken();
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
        //
        Schema::table('teacher', function (Blueprint $table) {
            $table->dropIfExists('teacher');
        });
    }
}
