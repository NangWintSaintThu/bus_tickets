<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class route extends Model
{
     protected $fillable = [
        'departure_station', 'arrival_station','departure_time',
        'price','bus_type_id','seat'
    ];
   
}
