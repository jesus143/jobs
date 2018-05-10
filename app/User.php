<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Aesimpt\UserSubscription\Traits\Payment;
use Aesimpt\Job\Traits\JobTrait;
use Aesimpt\Job\Traits\JobUserTrait;
use Aesimpt\Helper\Traits\FilterTraits as Filter;


class User extends Authenticatable
{
    use Notifiable,
        Payment,
        JobTrait,
        JobUserTrait,
        Filter;

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


    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }

    public function hasRole($role)
    {
        //
        foreach($this->roles  as $r) {
            if(strpos(strtolower($role), strtolower($r->name)) > -1) {
                return true;
            }
        }

        return false;
    }
}
