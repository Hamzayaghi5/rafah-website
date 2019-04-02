<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //


      protected $fillable = [
        'title_en','title_ar','description_en','description_ar','img','reference',
    ];
  

    public function Application_service()
  {
    return $this->hasMany('App\Application');
  }

     public function images()
  {
    return $this->hasMany('App\Service_image');
  }
}
