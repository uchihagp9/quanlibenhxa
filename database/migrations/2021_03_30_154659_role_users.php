<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoleUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_users', function (Blueprint $table) {
            $table->string('idrole')->nullable();
            $table->string('Namerole')->nullable();
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
        Schema::dropIfExists('role_users');
    }
}
