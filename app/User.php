<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use  Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','type',
    ];

       public function is_admin()
     {
       if($this->type=='admin')
       {
         return true;
       }
       else {
         // code...
         return false;
       }
     }


     public function type($type) {
    $type = (array)$type;
    return in_array($this->type, $type);
}


}