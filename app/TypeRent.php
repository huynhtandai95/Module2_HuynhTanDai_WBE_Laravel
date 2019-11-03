<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeRent extends Model
{
    protected $table ='type_rent';

    function services(){
       return $this->hasMany('App\Services','TypeRent_id','id');
    }
}
