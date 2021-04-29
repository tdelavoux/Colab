<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Board\Board;
use App\data\Project;
use App\data\Modules\Module;

class BoardLogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($fkBoard)
    {
        $board = Board::getBoardInfos($fkBoard);
        $modules = Module::getAll();
        $project = Project::find($board['fk_projet']);
        return view('AppsViews.boards.logsView.logsboard')->with('board', $board)->with('project', $project)->with('modules', $modules);
    }
}
