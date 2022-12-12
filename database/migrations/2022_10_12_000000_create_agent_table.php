<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('AGENT_CODE')->nullable();;
            $table->string('AGENT_NAME',40);
            $table->string('WORKING_AREA',35);
            $table->string('PHONE_NO',35);
            $table->string('COUNTRY',150);
            $table->double('COMMISSION',12,2);
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
        Schema::dropIfExists('agents');
    }
};
