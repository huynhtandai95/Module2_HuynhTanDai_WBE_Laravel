<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_deltais extends Model
{
    protected $table ='order_deltais';
    protected $fillable = [
        'fullName', 'email', 'phone', 'numberID','services_id','TypeRent_id','address','dateStart','dateEnd'
    ];
//    function services(){
//      return  $this->belongsTo('App\Services','services_id') ;
//    }
}
