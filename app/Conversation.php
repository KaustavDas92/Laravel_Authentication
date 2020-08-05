<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $guarded=[];
    function user()
    {
        return $this->belongsTo(User::class);
    }
    function replies()
    {
        return $this->hasMany(Replies::class);
    }
}
