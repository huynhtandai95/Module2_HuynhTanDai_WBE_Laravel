<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class review extends Model
{
    protected $table = 'review' ;
    function users(){
        return $this->belongsTo('App\User','users_id');
    }
}
