<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCombosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('motherboard');
            $table->string('ram');
            $table->string('graphics');
            $table->string('hdd');
            $table->string('ssd');
            $table->string('powersupply');
            $table->string('processor');
            $table->string('catching');
            $table->integer('price');
            $table->string('image');
            $table->integer('user_id');
            $table->integer('approval');
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
        Schema::dropIfExists('combos');
    }
}
