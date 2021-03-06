<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use Illuminate\Http\Form;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\data\Board\Board;
use App\data\Project;
use App\data\chat\ChatRoom;
use App\data\chat\ChatPost;
use App\data\chat\ChatPostReply;
use App\data\chat\ChatPostLike;
use App\data\chat\ChatPostReplyLike;
use App\data\chat\ChatPostAttachment;
use App\data\Modules\Module;

class BoardChatController extends Controller
{

    const IMG_TYPES = array('jpg', 'png', 'gif', 'jpeg');

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($fkBoard)
    {
        $board = Board::getBoardInfos($fkBoard);
        $modules = Module::getAll();
        $project = Project::find($board['fk_projet']);
        $chatRoom = ChatRoom::where('fk_board', $board->id)->first();
        $posts = ChatPost::getAllPostsByFkRoom($chatRoom->id);
        return view('AppsViews.boards.chatView.chatboard')
                    ->with('board', $board)
                    ->with('posts', $posts)
                    ->with('project', $project)
                    ->with('chatRoom', $chatRoom)
                    ->with('modules', $modules);
    }

    public function postMessage(Request $request){

        $validate = $request->validate([
            'fkChatRoom' => 'required|exists:chat_room,id',
            'messagePost' => 'required|max:1000'
        ]);

        $chat_post = new ChatPost();
        $chat_post->fk_chat_room = $request->input('fkChatRoom');
        $chat_post->libelle = $request->input('messagePost');
        $chat_post->fk_user = Auth::id();
        $chat_post->save();

        $destinationPathImage = env('DIRPOSTIMG');
        $destinationPathFiles = env('DIRPOSTFILES');
        foreach($request->allFiles() as $file){

            $post_attachment = new ChatPostAttachment();
            $post_attachment->fk_chat_post = $chat_post->id;

            if(in_array($file->getClientOriginalExtension(), self::IMG_TYPES)){
                $name = $chat_post->id . '_' . uniqid() .'.'.$file->getClientOriginalExtension();
                $file->move($destinationPathImage, $name);
                $post_attachment->type_attachment = 'IMG';
            }else{
                $name = $chat_post->id . '_' . $file->getClientOriginalName();
                $file->move($destinationPathFiles, $name);
                $post_attachment->type_attachment = 'FIL';
            }
            $post_attachment->attachment = $name;
            $post_attachment->save();
            

        }

        $chatRoom = ChatRoom::find($chat_post->fk_chat_room);
        $board = Board::find($chatRoom->fk_board);
        
        return redirect()->route('chat.view', [$board->id])->with('confirmMessage', 'Post validé !');
    }

    public function replyMessage(Request $request){

        $validate = $request->validate([
            'fkchatPost' => 'required|exists:chat_post,id',
            'chatPostReply' => 'required|max:500'
        ]);

        $chat_post_reply = new ChatPostReply();
        $chat_post_reply->fk_chat_post = $request->input('fkchatPost');
        $chat_post_reply->reply = $request->input('chatPostReply');
        $chat_post_reply->fk_user = Auth::id();
        $chat_post_reply->save();

        $chat_post = ChatPost::find($chat_post_reply->fk_chat_post);
        $chatRoom = ChatRoom::find($chat_post->fk_chat_room);
        $board = Board::find($chatRoom->fk_board);
        
        return redirect()->route('chat.view', [$board->id])->with('confirmMessage', 'Réponse soumise !');
    }

    public function likePost(Request $request){

        $validate = $request->validate([
            'fkId' => 'required|exists:chat_post,id',
            'action' => ''
        ]);

        $exist = ChatPostLike::where('fk_user', Auth::id())->where('fk_chat_post', $request->fkId)->first();

        if($exist){
            if($request->action === 'false'){
                $exist->dateCloture = now();
                $exist->fk_user_cloture = Auth::id();
                $exist->save();
            }else{
                $exist->dateCloture = null;
                $exist->fk_user_cloture = null;
                $exist->save();
            }

        }else if(!$exist && $request->action === 'true'){
            $postlike = new ChatPostLike();
            $postlike->fk_user = Auth::id();
            $postlike->fk_chat_post = $request->fkId;
            $postlike->save();
        }
        die('OK');
    }

    public function likePostReply(Request $request){

        $validate = $request->validate([
            'fkId' => 'required|exists:chat_post_reply,id',
            'action' => ''
        ]);

        $exist = ChatPostReplyLike::where('fk_user', Auth::id())->where('fk_chat_post_reply', $request->fkId)->first();
        
        if($exist){
            if($request->action === 'false'){
                $exist->dateCloture = now();
                $exist->fk_user_cloture = Auth::id();
                $exist->save();
            }else{
                $exist->dateCloture = null;
                $exist->fk_user_cloture = null;
                $exist->save();
            }

        }else if(!$exist && $request->action === 'true'){
            
            $postReplylike = new ChatPostReplyLike();
            $postReplylike->fk_user = Auth::id();
            $postReplylike->fk_chat_post_reply = $request->fkId;
            $postReplylike->save();
        }
        die('OK');
    }
}
