<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $guarded=[];
    function abilities()
    {
        return $this->belongsToMany(Ability::class)->withTimestamps();
    }
    function users()
    {
        return $this->belongsToMany(User::class);
    }

    //creating the many to many relationship with roles and abilities
    function allowTo($ability)
    {
        if(is_string($ability))
            $ability=Ability::where('name',$ability);
        $this->abilities()->save($ability);
    }


}
