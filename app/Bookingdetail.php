<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookingdetail extends Model
{
    protected $fillable=[
    	'id','travellerinfo_id','route_id','no_people','total','seat_no','departure_date'
    ];
     public function travellerinfo($value='')
  {
<<<<<<< HEAD

  	return $this->belongsTo('App\TravellerInfo','bookingdetails')
=======
  	
  	return $this->belongsTo('App\TravellerInfo','travellerinfolist')
>>>>>>> 808e42de1145c8463cfe104053df8154a61e95d4
                ->withPivot('qty')
                ->withTimestamps();
  }

  public function route($value='')
  {
  	return $this->belongsTo('App\route');
  }
  public function user($value='')
  {
    return $this->belongsTo('App\User');
  }
}
