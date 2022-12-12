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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ORD_NUM')->nullable();
            $table->string('CUST_NAME',40);
            $table->double('ORD_AMOUNT',12,2);
            $table->double('ADVANCE_AMOUNT',12,2);
            $table->date('ORD_DATE');
            $table->bigInteger('CUST_CODE')->unsigned()->nullable();
            $table->foreign('CUST_CODE')->references('id')->on('customers')->onUpdate('cascade')->onDelete('set null');
            $table->bigInteger('AGENT_CODE')->unsigned()->nullable();
            $table->foreign('AGENT_CODE')->references('id')->on('agents')->onUpdate('cascade')->onDelete('set null');
            $table->string('ORD_DESCRIPTION');
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
        Schema::dropIfExists('orders');
    }
};
