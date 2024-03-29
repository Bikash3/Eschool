<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LoginLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->ipAddress('ip_address');
            $table->string('status')->nullable();
            $table->macAddress('mac')->nullable();
            $table->longText('browser')->nullable();
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
        Schema::table('login_logs', function (Blueprint $table) {
            $table->dropIfExists('login_logs');
        });
    }
}
