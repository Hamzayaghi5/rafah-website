<?php

namespace App;
use App\Block_Content;
use Illuminate\Database\Eloquent\Model;

class Content_Block extends Model
{
      public function Content_Block()
  {
    return $this->hasMany('App\Block_Content');
  }

      protected $fillable = [
        'name', 'title',
    ];
}
