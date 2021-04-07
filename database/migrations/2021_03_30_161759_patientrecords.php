<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patientrecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientrecords', function (Blueprint $table) {
            $table->string('idpatientrecords')->nullable();
            $table->string('dayin')->nullable();
            $table->string('dayout')->nullable();
            $table->string('idlistservice')->nullable();
            $table->string('idlistthuoc')->nullable();
            $table->string('idresult')->nullable();
            $table->string('idlistvtyt')->nullable();
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
        //
        Schema::create('service', function (Blueprint $table) {
            $table->string('idservice')->nullable();
            $table->string('Nameservice')->nullable();
            $table->string('pcie')->nullable();
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
        Schema::create('listservice', function (Blueprint $table) {
            $table->string('idlistservice')->nullable();
            $table->string('idservice')->nullable();
            /* đảm bảo cho việc kiểm soát  */
            $table->boolean('flat')->default(0);
            $table->string('user_create')->default('admin');
            $table->string('user_update')->default('admin');
            $table->timestamp('time_create')->nullable();
            $table->timestamp('last_time_update')->nullable();
            $table->ipAddress('ip_user');
            $table->macAddress('device_user');		
        });
        Schema::create('reusult', function (Blueprint $table) {
            $table->string('idreusult')->nullable();
            $table->string('status')->nullable();
            $table->string('switchhospital')->nullable();
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
        Schema::dropIfExists('patientrecords');
        Schema::dropIfExists('service');
        Schema::dropIfExists('listservice');
        Schema::dropIfExists('result');
    }
}
