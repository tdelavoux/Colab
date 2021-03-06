<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\data\Color;
use App\data\Project;
use App\data\Board\Board;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function createProject(Request $request)
    {
        $validate = $request->validate([
            'projectName' => 'required|max:100',
            'description' => 'max:500',
            'hexaColor' => 'required|max:7|min:7|exists:color,hexaCode'
        ]);
        
        //Get color
        $color = Color::where('hexaCode', $request->hexaColor)->first();

        // Put User as owner
        $project = new Project();
        $project->libelle = $request->input('projectName');
        $project->description = $request->input('description');
        $project->fk_user = Auth::id();
        $project->fk_color = $color->id;
        $project->save();

        return redirect(url()->previous())->with('confirmMessage', 'Le projet à été créé');
    }

    public function showOverview($fkProject){

        $project = Project::getProjectInfos($fkProject);

        return view('AppsViews.project.overview')
                    ->with('project', $project);
    }
}
