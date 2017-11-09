<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable('');
            $table->integer('longitude')->nullable('');
            $table->integer('latitude')->nullable('');
            $table->integer('number');
            $table->string('street_one');
            $table->string('street_two')->nullable('');
            $table->string('street_three')->nullable('');
            $table->string('suburb');
            $table->string('city');
            $table->string('province');
            $table->integer('postal_code');
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('locations');
    }
}
