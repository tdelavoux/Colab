<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Board\Board;
use App\data\Project;
use App\data\Modules\Module;

class BoardScrumController extends Controller
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
        return view('AppsViews.boards.scrumview.scrumboard')->with('board', $board)->with('project', $project)->with('modules', $modules);
    }

    public function getEmptyLine(){
        /* TODO réaliser l'insert en BDD pour la ligne a renvoyer */
        return view('AppsViews.boards.scrumview.scrumPartials._emptyLineSprint');
    }

    public function getEmptySprint(){
        /* TODO réaliser l'insert en BDD pour le bloc a renvoyer */
        return view('AppsViews.boards.scrumview.scrumPartials._emptyBoardSprint');
    }
}
