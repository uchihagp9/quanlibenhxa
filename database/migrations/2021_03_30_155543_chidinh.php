<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chidinh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_dinh', function (Blueprint $table) {
            $table->string('idchinhdinh')->nullable();
            $table->string('Namechidinh')->nullable();
            $table->string('Triloaibenh')->nullable();
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
        //
        Schema::dropIfExists('chi_dinh');
    }
}
