<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('travellerinfo_id');
            $table->unsignedBigInteger('route_id');
            $table->integer('no_people');
            $table->integer('seat_no');
            $table->integer('total');
            $table->date('departure_date');
            $table->timestamps();

           // $table->foreign('travellerinfo_id')
           //          ->references('id')
           //          ->on('travellerinfos')
           //          ->onDelete('cascade');

           // $table->foreign('route_id')
           //          ->references('id')
           //          ->on('routes')
           //          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookingdetails');
    }
}
