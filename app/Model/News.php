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
}
