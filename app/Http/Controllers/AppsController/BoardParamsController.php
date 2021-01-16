<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tableau;
use App\Project;

class  BoardParamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($Tab, $fkBoard){

        $board = Tableau::find($fkBoard);
        $project = Project::find($board['fk_projet']);
        return view('AppsViews.boards.paramsview.params')->with('tab', $Tab)->with('board', $board)->with('project', $project);
    }

}
