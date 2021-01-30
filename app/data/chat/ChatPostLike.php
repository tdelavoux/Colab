<?php

namespace App\data\chat;

use Illuminate\Database\Eloquent\Model;

class ChatPostLike extends Model
{
    protected $table = "chat_post_like";

    public static function getAllLikesByFkPost($fkChatPost){
        return self::join('users', 'users.id', '=', 'chat_post_like.fk_user')
                    ->select('chat_post_like.*', 'users.name as userName')
                    ->where('fk_chat_post', $fkChatPost)
                    ->whereNull('dateCloture')
                    ->get();
    }
}
