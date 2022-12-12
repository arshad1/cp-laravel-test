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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('CUST_CODE')->nullable();
            $table->string('CUST_NAME',40);
            $table->string('CUST_CITY',35);
            $table->string('WORKING_AREA',35);
            $table->string('CUST_COUNTRY',150);
            $table->string('PHONE_NO',20);
            $table->bigInteger('AGENT_CODE')->unsigned()->nullable();
            $table->foreign('AGENT_CODE')->references('id')->on('agents')->onUpdate('cascade')->onDelete('set null');
            $table->integer('GRADE');
            $table->double('OPENING_AMT',12,2);
            $table->double('RECEIVE_AMT',12,2);
            $table->double('PAYMENT_AMT',12,2);
            $table->double('OUTSTANDING_AMT',12,2);
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
        Schema::dropIfExists('customers');
    }
};
