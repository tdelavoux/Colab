<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Tableau;
use App\data\Modules;
use App\data\Project;


class BoardStatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($fkBoard)
    {
        $board = Tableau::getTableauInfos($fkBoard);
        $modules = Modules::getAll();
        $project = Project::find($board['fk_projet']);
        return view('AppsViews.boards.statsView.statsboard')->with('board', $board)->with('project', $project)->with('modules', $modules);
    }
}
