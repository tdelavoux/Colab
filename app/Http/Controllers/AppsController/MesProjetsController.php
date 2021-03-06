<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Project;
use Illuminate\Support\Facades\Auth;

class MesProjetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute(){

        $projects = Project::selectRaw('project.*, color.hexaCode')->join('color', 'color.id', '=', 'project.fk_color')
                    ->whereNull('fk_user_cloture')->where('fk_user', Auth::id())->get();

        return view('AppsViews.myprojects.myprojects')->with('projects', $projects);
    }
}
