<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'name',
        'comment',
        'text',
        'img_path'
    ];

    //relazione dei db

    public function infoPost(){
        return $this->hasOne('App\InfoPost');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}

