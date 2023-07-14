<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();//official receipt num
            $table->unsignedBigInteger('bill_id');
            $table->string('paymentdate');
            $table->string('modeofpayment');
            $table->string('amountpaid');
            $table->string('image')->default('blank.jpg');
            $table->string('referencenum');
            $table->timestamps();

            $table->foreign('bill_id')->references('id')->on('bill')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
}
