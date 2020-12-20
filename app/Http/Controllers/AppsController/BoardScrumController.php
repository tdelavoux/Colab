<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoardScrumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($fkBoard)
    {
        return view('AppsViews.scrumview.scrumboard');
    }

    public function getEmptyLine(){
        /* TODO réaliser l'insert en BDD pour la ligne a renvoyer */
        return view('AppsViews.scrumview.scrumPartials._emptyLineSprint');
    }

    public function getEmptySprint(){
        /* TODO réaliser l'insert en BDD pour le bloc a renvoyer */
        return view('AppsViews.scrumview.scrumPartials._emptyBoardSprint');
    }
}
