<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Schema;

class Article extends Model
{
 	function get_comments(){
 		return $this->hasMany('App\Comment', 'article_id', 'id');
 	}

    public function user(){
        return $this->belongsTo('App\User');
    }
}
