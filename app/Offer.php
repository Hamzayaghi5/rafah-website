<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
   

       protected $fillable = [
        'title_en','title_ar','description_en','description_ar','img',
    ];
  
}
