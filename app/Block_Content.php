<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Content_Block;
class Block_Content extends Model
{
    public function Block_Content()
    {
      return $this->belongsTo('App\Content_Block', 'content_id');
 	}

 	    protected $fillable = [
        'img', 'link', 'desc','title',
    ];
}
