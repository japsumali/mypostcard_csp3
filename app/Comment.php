<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    function get_username(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
