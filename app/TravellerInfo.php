<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TravellerInfo extends Model
{
    protected $fillable=[
    	'travellerinfo_id','user_id','phone_no','address'];
}
