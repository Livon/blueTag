<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->timestamps();


            $table->string('user',64)->comment("帳號");
            $table->string('password',64)->comment("密碼");
            $table->string('password_md5',128)->nullable()->comment("密碼MD5");

            $table->string('type',64)->nullable()->comment("用戶群組 sysConfig_akey->sys_group");


            $table->integer('is_lift')->nullable()->comment("是否啟用1:yes,0:NO")->default(1);

            $table->timestamp('enable_time')->nullable()->comment("啟用時間");
            $table->timestamp('disable_time')->nullable()->comment("關閉時間");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
