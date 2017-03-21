<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
     * Setter name
     * 
     */
    public function setNameAttribute($val){
        $this->attributes['name'] = ucfirst($val);
    }

    /**
     * Setter/Mutator password
     * 
     */
    public function setPasswordAttribute($val){
        $this->attributes['password'] = bcrypt($val);
    }

    /**
     * Getter/Accessor email
     * 
     */
    public function getEmailAttribute($val){
        return strtok($val, '@');
    }
}
