<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus_type extends Model
{
    protected $fillable=[
      'id','name'
    ];
    public function routes($value='')
    {
    	return $this->hasMany('App\Route');
    }
}
