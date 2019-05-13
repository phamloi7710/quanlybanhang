<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   protected $table = 'news';
   public function category()
    {
    	return  $this->belongsTo('App\Model\NewsCategory', 'cate_id', 'id');
    }
    public function user()
    {
    	return  $this->belongsTo('App\User', 'user_id', 'id');
    }
}
