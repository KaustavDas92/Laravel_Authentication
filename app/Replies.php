<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{

    /**
     * @var mixed
     */

    function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
    function user()
    {
        return $this->belongsTo(User::class);
    }
}
