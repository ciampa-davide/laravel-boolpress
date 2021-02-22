<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoPost extends Model
{
    Public function post(){

        return $this->belongsTo('App\Blog');
    }
}
