<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kname')->nullable();
            $table->date('kbirthday')->nullable();
            $table->string('kfather')->nullable();
            $table->string('kmother')->nullable();
            $table->string('ktrainingsessions')->nullable();
            $table->string('kowner')->nullable();
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
        Schema::dropIfExists('listings');
    }
}
