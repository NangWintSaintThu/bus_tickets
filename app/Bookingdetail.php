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
                ->withPivot('qty')
                ->withTimestamps();
=======

  	//return $this->belongsTo('App\TravellerInfo','travellerinfolist');
                //->withPivot('qty');
                //->withTimestamps();
  	return $this->belongsTo('App\TravellerInfo','travellerinfolist')
                ->withPivot('qty')
                ->withTimestamps();

>>>>>>> 8d5e8e9146c13e6d0ede26924762f8c61fb7172e
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
