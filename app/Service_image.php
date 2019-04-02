<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_image extends Model
{
    //


    public function service()
    {
    	# code...
    	$this->belongsTo('App\Service','service_id');
    }
}
