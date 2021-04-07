<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Thuoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuoc', function (Blueprint $table) {
            $table->string('idthuoc')->nullable();
            $table->string('idnhomthuoc')->nullable();
            $table->string('pass_word')->nullable();
            $table->string('Name')->nullable();
            $table->string('Hoatchat')->nullable();
            $table->string('idchidinh')->nullable();
            $table->string('pice')->nullable();
            /* đảm bảo cho việc kiểm soát  */
            $table->boolean('flat')->default(0);
            $table->string('user_create')->default('admin');
            $table->string('user_update')->default('admin');
            $table->timestamp('time_create')->nullable();
            $table->timestamp('last_time_update')->nullable();
            $table->ipAddress('ip_user');
            $table->macAddress('device_user');		
        });

        //
        Schema::create('listthuoc', function (Blueprint $table) {
            $table->string('idlissthuoc')->nullable();
            $table->string('idthuoc')->nullable();
            /* đảm bảo cho việc kiểm soát  */
            $table->boolean('flat')->default(0);
            $table->string('user_create')->default('admin');
            $table->string('user_update')->default('admin');
            $table->timestamp('time_create')->nullable();
            $table->timestamp('last_time_update')->nullable();
            $table->ipAddress('ip_user');
            $table->macAddress('device_user');		
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thuoc');
        Schema::dropIfExists('listthuoc');
    }
}
