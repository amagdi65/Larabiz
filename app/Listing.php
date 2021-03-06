<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{   
    //belong to users
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
