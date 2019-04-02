<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Service;
use App\Customer;
class Application extends Model
{
    //
    
    public function customer()
    {
      return $this->belongsTo('App\Customer', 'customer_id');
 	}

 	public function service()
    {
      return $this->belongsTo('App\Service', 'service_id');
 	}

 	 	    protected $fillable = [
        'service_id', 'status', 'description',
    ];

}