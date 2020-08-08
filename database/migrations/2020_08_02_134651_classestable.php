<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_id');
            $table->char('name');
            $table->string('description', 250);
            $table->integer('teacher_id');
            $table->string('students_id');
            $table->json('notice');
            $table->json('announcements');
            $table->json('grade');
            $table->json('assignments');
            $table->char('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->dropIfExists('classes');
        });
    }
}
