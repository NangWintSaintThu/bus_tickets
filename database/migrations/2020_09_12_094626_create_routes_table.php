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
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->integer('price');
            $table->integer('seat');
            $table->unsignedBigInteger('bus_type_id'); 
            $table->timestamps();

            
             $table->foreign('bus_type_id')
                  ->references('id')
                  ->on('buses')
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
