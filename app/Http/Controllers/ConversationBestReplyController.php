<?php

namespace App\Http\Controllers;

use App\Replies;
use Illuminate\Http\Request;

class ConversationBestReplyController extends Controller
{
    function store($id)
    {
        $reply=Replies::find($id);
        // authorize that the current user has the permission to set the best reply
        $this->authorize('update',$reply->conversation);
//        $reply->conversation->best_reply_id=$reply->id;
//        $reply->conversation->save();
          $reply->conversation->setBestReply($reply);
        return back();
    }
}
