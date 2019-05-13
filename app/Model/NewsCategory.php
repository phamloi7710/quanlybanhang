<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'news_categories';
    public function news()
    {
    	return $this->hasMany('App\Model\news', 'cate_id', 'id');
    }
}
