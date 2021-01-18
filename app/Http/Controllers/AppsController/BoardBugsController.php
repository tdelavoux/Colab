<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Tableau;
use App\data\Project;

class BoardBugsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($fkBoard)
    {
        $board = Tableau::find($fkBoard);
        $project = Project::find($board['fk_projet']);
        return view('AppsViews.boards.bugsView.bugsboard')->with('board', $board)->with('project', $project);
    }
}
