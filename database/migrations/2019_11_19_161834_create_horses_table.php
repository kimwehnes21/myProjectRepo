<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horses', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name')->nullable();
          $table->date('birthday')->nullable();
          $table->string('father')->nullable();
          $table->string('mother')->nullable();
          $table->string('trainigsessions')->default('nicht vorhanden');
          $table->string('owner')->nullable();
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
        Schema::dropIfExists('horses');
    }
}
