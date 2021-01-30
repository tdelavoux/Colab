<?php

namespace App\data\chat;

use Illuminate\Database\Eloquent\Model;

class ChatPostReplyLike extends Model
{
    protected $table = "chat_post_reply_like";

    public static function getAllLikesByFkChatPostReply($fkChatPostReply){
        return self::join('users', 'users.id', '=', 'chat_post_reply_like.fk_user')
                    ->select('chat_post_reply_like.*', 'users.name as userName')
                    ->where('fk_chat_post_reply', $fkChatPostReply)
                    ->whereNull('dateCloture')
                    ->get();

    }
}
