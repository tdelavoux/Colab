<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Tableau;
use App\data\Project;
use App\data\Modules;

class BoardIssuesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($fkBoard)
    {
        $board      = Tableau::getTableauInfos($fkBoard);
        $modules    = Modules::getAll();
        $project    = Project::find($board['fk_projet']);
        return view('AppsViews.boards.issuesview.issuesboard')->with('board', $board)->with('project', $project)->with('modules', $modules);
    }
}
