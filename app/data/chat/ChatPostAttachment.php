<?php

namespace App\data\chat;

use Illuminate\Database\Eloquent\Model;


class ChatPostAttachment extends Model
{
    protected $table = "chat_post_attachment";

    public static function getImagesByFkPost($fkChatPost){
        return self::where('fk_chat_post', $fkChatPost)
                    ->where('type_attachment', 'IMG')
                    ->whereNull('dateCloture')
                    ->get();
    }

    public static function getFilesByFkPost($fkChatPost){
        return self::where('fk_chat_post', $fkChatPost)
                    ->where('type_attachment', 'FIL')
                    ->whereNull('dateCloture')
                    ->get();
    }
}
