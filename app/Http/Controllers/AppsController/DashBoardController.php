<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\data\Project;

class DashBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function execute(){

        $projects = Project::selectRaw('project.*, color.hexaCode')->join('color', 'color.id', '=', 'project.fk_color')
                    ->whereNull('fk_user_cloture')->where('fk_user', Auth::id())->get();

        return view('AppsViews.dashboard.dashboard')->with('projects', $projects);
    }

}
