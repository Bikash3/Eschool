<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('school', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reg_id');
            $table->string('name');
            $table->string('address');
            $table->string('branch');
            $table->string('website');
            $table->string('email');
            $table->integer('phone');
            $table->string('g_api');
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
    }
}
