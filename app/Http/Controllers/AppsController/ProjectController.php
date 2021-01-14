<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Color;
use App\Project;
use App\Tableau;

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
            'hexaColor' => 'required|max:10'
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

        $project = Project::find($fkProject);
        $tables = Tableau::selectRaw('tableau.*, color.hexaCode')->join('color', 'color.id', '=', 'tableau.fk_color')
            ->where('fk_user_cloture', null)->where('fk_projet', $fkProject)->get();

        return view('AppsViews.project.overview')
                    ->with('project', $project)
                    ->with('tables', $tables);
    }
}
