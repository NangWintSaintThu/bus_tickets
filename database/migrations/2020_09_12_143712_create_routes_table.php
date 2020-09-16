<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departure_station');
            $table->unsignedBigInteger('arrival_station');
            $table->string('departure_time');
            $table->string('price');
            $table->unsignedBigInteger('bus_type_id');
            $table->integer('seat');
            $table->timestamps();

             $table->foreign('bus_type_id')
                    ->references('id')
                    ->on('bus_types')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
