<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $guarded=[];

    function setBestReply(Replies $reply)
    {
        $this->best_reply_id=$reply->id;
        $this->save();
    }
    function user()
    {
        return $this->belongsTo(User::class);
    }
    function replies()
    {
        return $this->hasMany(Replies::class);
    }
}
