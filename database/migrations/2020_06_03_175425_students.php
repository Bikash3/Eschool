<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_id');
            $table->string('name');
            $table->string('guardian_name');
            $table->string('address');
            $table->char('gender');
            $table->date('d_o_b');
            $table->char('class');
            $table->char('stream');
            $table->integer('phone');
            $table->string('email');
            $table->string('password');
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
        Schema::table('students', function (Blueprint $table) {
            $table->dropIfExists('students');
        });
    }
}
