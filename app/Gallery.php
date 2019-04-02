<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //

        public function gallery_images()
  {
    return $this->hasMany('App\Gallery_Img');
  }
}
