<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostandfoundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lostandfound', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('blank.jpg');
            $table->string('item');
            $table->string('description');
            $table->string('date');
            $table->string('status')->default('lost');
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
        Schema::dropIfExists('lostandfound');
    }
}
