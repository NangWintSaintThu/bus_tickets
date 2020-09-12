<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookingdetail extends Model
{
    protected $fillable=[
    	'id','travellerinfo_id','route_id','no_people','total','seat_no','departure_date'];
}
