<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=[
<<<<<<< HEAD
      'id','name'
    ];
    public function routes($value='')
    {
    	return $this->hasMany('App\Route');
    }
    
=======
    	'id','name'];
>>>>>>> 3893e196fa9d2c30de8e0592791ddd1d00d3279c
}
