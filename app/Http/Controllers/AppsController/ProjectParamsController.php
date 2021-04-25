<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Tableau;
use App\data\Project;
use App\data\Color;
use App\data\Team\TeamProjectAccessTableau;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class  ProjectParamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($Tab, $fkProject){

        $project    = Project::getProjectInfos($fkProject);
        return view('AppsViews.project.paramsview.params')->with('tab', $Tab)->with('project', $project);
    }

    public function updateGeneral(Request $request){
        $validate = $request->validate([
            'libelle'       => 'required|max:100',
            'description'   => 'max:500',
            'hexaColor'     => 'required|max:10',
            'fk_project'    => 'required|exists:project,id'
        ]);

        //Get color
        $color = Color::where('hexaCode', $request->hexaColor)->first();

        $project = Project::find($request->input('fk_project'));
        $project->libelle       = $request->input('libelle');
        $project->description   = $request->input('description');
        $project->fk_color      = $color->id;
        $project->save();

        return redirect(url()->previous())->with('confirmMessage', 'Informations mises à jour');
    }

    public function updateAccess(Request $request){
        $validate = $request->validate([
            'fk_team_project'       => 'required|exists:team_project,id',
            'fk_tableau'            => 'required|exists:tableau,id',
            'access'                => 'required|integer|max:1|min:0',
        ]);

        $access = TeamProjectAccessTableau::where('fk_tableau', $request->input('fk_tableau'))->where('fk_team_project', $request->input('fk_team_project'))->first();
        $access->access         = $request->input('access');
        $access->fk_user_update = Auth::user()->id;
        $access->updated_at     = Carbon::now();
        $access->save();
        die('OK');
    }

}
