<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    
    public function genre(){
        return $this->belongsTo('App\Genre');
    }
    public function episode(){
        return $this->belongsTo('App\Episode','movie_id');
    }
}
