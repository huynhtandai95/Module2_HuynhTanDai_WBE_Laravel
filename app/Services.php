<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table ='services';
    function typeRent() {
        return $this->belongsTo('App\TypeRent','TypeRent_id');
    }
    function TypeOfService(){
        return $this->belongsTo('App\TypeOfService','TypeOfService_id');
    }
//    function order_deltais(){
//        return $this->hasMany('App\order_deltais','services_id');
//    }
}
