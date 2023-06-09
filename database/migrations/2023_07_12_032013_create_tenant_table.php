<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('applicant_id');
            $table->string('tenanttype');
            $table->string('stallname');
            $table->string('rentaltype');
            $table->string('stallnum');
            $table->string('stallfee');
            $table->string('cusa');
            $table->string('totalfee');
            $table->timestamps();

            $table->foreign('applicant_id')->references('id')->on('applicant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenant');
    }
}
