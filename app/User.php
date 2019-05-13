<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function language()
    {
        return $this->hasMany('App\Model\Language','user_id','id');
    }
    public function news()
    {
        return $this->hasMany('App\Model\News', 'user_id', 'id');
    }
    public function activity()
    {
        return $this->hasMany('\Spatie\Activitylog\Models\Activity', 'causer_id', 'id');
    }
}
