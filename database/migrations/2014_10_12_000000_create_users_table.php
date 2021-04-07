<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id_user')->nullable();
            $table->string('id_role')->nullable();
            $table->string('pass_word')->nullable();
            $table->string('Name_user')->nullable();
            $table->string('Date_of_birth')->nullable();
            $table->string('Number_phone')->nullable();
            $table->string('id_position')->nullable();
            $table->string('id_FITH')->nullable();
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
        Schema::dropIfExists('users');
    }
}
