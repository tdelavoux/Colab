<?php

namespace App\Http\Controllers\AppsController;
use App\Tableau;
use App\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('AppsViews.boards.chatView.chatboard')->with('board', $board)->with('project', $project);
    }
}
