<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    function conversations()
    {
        return $this->hasMany(Conversation::class);
    }
    function replies()
    {
        return $this->hasMany(Replies::class);
    }
    function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    //creating many to many relationship with user and abilities
    function assignRole($Role)
    {
        if(is_string($Role))
            $Role=Role::where('name',$Role)->firstOrFail();
            ;
        $this->roles()->save($Role);
    }
    function userAbility()
    {
        return $this->roles->map->abilities->flatten()->pluck('name')->unique();
    }

}
