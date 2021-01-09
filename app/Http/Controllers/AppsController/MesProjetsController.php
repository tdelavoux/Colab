<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use App\Color;

class MesProjetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute(){

        //$projects = Project::with('App\Color', 'fk_color')->where('fk_user_cloture', null)->get();
        $projects = Project::selectRaw('project.*, color.hexaCode')->join('color', 'color.id', '=', 'project.fk_color')->where('fk_user_cloture', null)->get();


        return view('AppsViews.myprojects.myprojects')->with('projects', $projects);
    }
}
