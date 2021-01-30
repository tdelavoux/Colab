<?php

namespace App\data\chat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ChatPostReply extends Model
{
    protected $table = "chat_post_reply";

    public static function getAllReplyByFkPost($fkChatPost){

        $replys = self::join('users', 'users.id', '=', 'chat_post_reply.fk_user')
                        ->select('chat_post_reply.*', 'users.img as userImage', 'users.name as userName')
                        ->where('fk_chat_post', $fkChatPost)
                        ->whereNull('dateCloture')
                        ->get();
        foreach($replys as &$reply){
            $reply['likes']       = ChatPostReplyLike::getAllLikesByFkChatPostReply($reply->id);
            $reply['selfLiked']   = ChatPostReplyLike::where('fk_user', Auth::id())->where('fk_chat_post_reply', $reply->id)->whereNull('dateCloture')->first() ? 'true' : 'false';
        }
        return $replys;
    }
}
