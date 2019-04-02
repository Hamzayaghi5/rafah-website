<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery_Img extends Model
{
    

        public function gallery()
    {
    	# code...
    	return $this->belongsTo('App\Gallery','gallery_id');
    }
}
