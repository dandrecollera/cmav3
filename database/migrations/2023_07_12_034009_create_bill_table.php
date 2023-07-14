<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->id();//billno
            $table->unsignedBigInteger('tenant_id');
            $table->string('month');
            $table->string('billdate');//every 15th of the month
            $table->string('billingperiod');//every first to last day of the month
            $table->string('duedate');//every last day of the month
            $table->string('outstandingbalance');// 0.00 + total amount from last billing
            $table->string('totalamount'); //totalfee from tenant table + outstanding balance
            $table->timestamps();

            $table->foreign('tenant_id')->references('id')->on('tenant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill');
    }
}
