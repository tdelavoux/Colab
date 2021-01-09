<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Project;

class DashBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function execute(){

        $projects = Project::selectRaw('project.*, color.hexaCode')->join('color', 'color.id', '=', 'project.fk_color')
                    ->where('fk_user_cloture', null)->where('fk_user', Auth::id())->get();

        return view('AppsViews.dashboard.dashboard')->with('projects', $projects);
    }

}
