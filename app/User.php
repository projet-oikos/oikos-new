<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function customers()
    {

        return $this->hasOne('App\Customer');
    }

    protected $attributes = [
        'role' => 'user'
    ];


    public function isAdmin(){
        return $this->role === 'admin';
    }

//    public function isAdmin()
//    {
//        return $this->is_admin;
//
//    }

}
