<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = "languages";
    public function user()
    {
        return $this -> belongsTo('App\User','user_id','id');
    }
}
