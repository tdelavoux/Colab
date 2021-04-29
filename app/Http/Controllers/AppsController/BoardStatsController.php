<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Board\Board;
use App\data\Modules\Module;
use App\data\Project;


class BoardStatsController extends Controller
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
        return view('AppsViews.boards.statsView.statsboard')->with('board', $board)->with('project', $project)->with('modules', $modules);
    }
}
