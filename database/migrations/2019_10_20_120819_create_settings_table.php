<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('deposit_flag')->default(1);
            $table->boolean('withdraw_flag')->default(1);
            $table->string('whatsapp')->default('+60123456789')->nullable();
            $table->string('telegram')->default('26wins')->nullable();
            $table->string('mobile')->default('+60123456789')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
