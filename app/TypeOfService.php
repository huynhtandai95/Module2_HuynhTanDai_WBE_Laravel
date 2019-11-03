<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfService extends Model
{
    protected $table ='type_of_services';
    function services(){
        return $this->hasMany('App\Services','TypeOfService_id');
    }

}
