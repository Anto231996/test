<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public function airport(){
        return $this->belongTo('App\Airport');
    }
}
