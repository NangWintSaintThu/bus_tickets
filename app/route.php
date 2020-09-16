<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable=[
    	'id','departure_station','arrival_station','departure_time','price','bus_type_id','seat'
    ];
     public function bustypeid($value='')
  {
  	return $this->belongsTo('App\BusType');
  }
}
