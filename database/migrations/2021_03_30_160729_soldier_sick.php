<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SoldierSick extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('soldiersick', function (Blueprint $table) {
            $table->string('idsoldiersick')->nullable();
            $table->string('numberhealthinsurance')->nullable();
            $table->string('Name')->nullable();
            $table->string('dateofbirth')->nullable();
            $table->string('placeregister')->nullable();
            $table->string('address')->nullable();    
            $table->string('idFITH')->nullable();    
            $table->string('idpatientrecods')->nullable();        
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
        Schema::dropIfExists('soldiersick');
    }
}
