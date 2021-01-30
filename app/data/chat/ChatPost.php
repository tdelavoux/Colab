<?php

namespace App\data\chat;

use Illuminate\Database\Eloquent\Model;
use App\data\chat\ChatPostReply;
use Illuminate\Support\Facades\Auth;


class ChatPost extends Model
{
    protected $table = "chat_post";

    public static function getAllPostsByFkRoom($fkChatRoom){

        $posts =  self::join('users', 'users.id', '=', 'chat_post.fk_user')
                            ->select('chat_post.*', 'users.img as userImage', 'users.name as userName', )
                            ->orderBy('chat_post.created_at', 'DESC')
                            ->where('fk_chat_room', $fkChatRoom)
                            ->whereNull('dateCloture')
                            ->get();
        foreach($posts as &$post){
            $post['replies']    = ChatPostReply::getAllReplyByFkPost($post->id);
            $post['likes']      = ChatPostLike::getAllLikesByFkPost($post->id);
            $post['selfLiked']  = ChatPostLike::where('fk_user', Auth::id())->where('fk_chat_post', $post->id)->whereNull('dateCloture')->first() ? 'true' : 'false';
        }
        return $posts;
    }
}
