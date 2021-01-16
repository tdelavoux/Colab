<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tableau;
use App\Project;

class BoardLogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($fkBoard)
    {
        $board = Tableau::find($fkBoard);
        $project = Project::find($board['fk_projet']);
        return view('AppsViews.boards.logsView.logsboard')->with('board', $board)->with('project', $project);
    }
}
