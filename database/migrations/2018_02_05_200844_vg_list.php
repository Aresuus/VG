<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VgList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('day_list', function (Blueprint $table) {
            $table->increments('day_id');
            $table->string('date');
            $table->string('location');
            $table->string('number_of_car');
            $table->string('name_barista');
            $table->string('cup110');
            $table->string('cup110_end');
            $table->string('cup175');
            $table->string('cup175_end');
            $table->string('cup250');
            $table->string('cup250_end');
            $table->string('cup340');
            $table->string('cup340_end');
            $table->string('marshmallowchino');
            $table->string('espresso');
            $table->string('macchiato');
            $table->string('hot_chocolate');
            $table->string('doppio');
            $table->string('americano');
            $table->string('cappuchino');
            $table->string('latte');
            $table->string('cocoa');
            $table->string('mocha');
            $table->string('fruit_milk');
            $table->string('tea');
            $table->string('add_milk');
            $table->string('add_toping');
            $table->string('add_marshmallow');
            $table->string('kroissant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
