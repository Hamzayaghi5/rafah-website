<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

          protected $fillable = [
        'name', 'phone_number','email','address','facebook','password',
    ];

  public function Application_customer()
  {
    return $this->hasMany('App\Application');
  }
}
