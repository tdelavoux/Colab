<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use Illuminate\Http\Form;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\data\Tableau;
use App\data\Project;
use App\data\chat\ChatRoom;
use App\data\chat\ChatPost;

class BoardChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($fkBoard)
    {
        $board = Tableau::find($fkBoard);
        $project = Project::find($board['fk_projet']);
        $chatRoom = ChatRoom::where('fk_tableau', $board->id)->first();
        return view('AppsViews.boards.chatView.chatboard')->with('board', $board)->with('project', $project)->with('chatRoom', $chatRoom);
    }

    public function postMessage(Request $request){

        $validate = $request->validate([
            'fkChatRoom' => 'required|exists:tableau,id',
            'messagePost' => 'required|max:1000'
        ]);

        $chat_post = new ChatPost();
        $chat_post->fk_chat_room = $request->input('fkChatRoom');
        $chat_post->libelle = $request->input('messagePost');
        $chat_post->fk_user = Auth::id();
        $chat_post->save();

        $chatRoom = ChatRoom::find($chat_post->fk_chat_room);
        $board = Tableau::find($chatRoom->fk_tableau);
        
        return redirect()->route('chat.view', [$board->id]);
    }
}
