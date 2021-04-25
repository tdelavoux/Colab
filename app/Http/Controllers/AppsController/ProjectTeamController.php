<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Team\TeamProject;
use App\data\Team\UserTeamProject;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\data\Project;
use App\data\Team\TeamProjectAccessTableau;
use App\User;


class ProjectTeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($fkProject)
    {
        $project = Project::find($fkProject);
        $teams = TeamProject::where('fk_project', $fkProject)->whereNull('dateCloture')->get();
        return view('AppsViews.project.teamView.teamboard')->with('project', $project)->with('teams', $teams);
    }

    public function createTeam(Request $request){

        $validate = $request->validate([
            'fk_project' => 'required|exists:project,id',
            'teamName' => 'required|max:50'
        ]);

        $team = new TeamProject();
        $team->name = $request->input('teamName');
        $team->fk_project = $request->input('fk_project');
        $team->save();

        //Association des droits sur les projets
        TeamProjectAccessTableau::initialiseByFkTeam($request->input('fk_project'), $team->id);
        
        return redirect()->route('team.view', ['fkProject' =>  $request->input('fk_project')])->with('confirmMessage', 'Equipe Ajoutée !');
    }

    public function viewMembers($fkProject, $fkteam){

        $project    = Project::find($fkProject);
        $teams      = TeamProject::where('fk_project', $fkProject)->whereNull('dateCloture')->get();
        //charger les membres de l'équipe
        $teamMembers = UserTeamProject::getAllMemberByFkTeam($fkteam, $fkProject);
        return view('AppsViews.project.teamView.teamboard')
                ->with('project', $project)
                ->with('teams', $teams)
                ->with('teamMembers', $teamMembers)
                ->with('fkteam', $fkteam)
                ->with('confirmMessage', 'Utilisateur ajouté à l\'équipe !');
    }

    public function addMember(Request $request){

        $validate = $request->validate([
            'fk_team' => 'required|exists:team_project,id',
            'fk_user' => 'required|exists:users,id'
        ]);

        $team = TeamProject::find($request->input('fk_team'));

        if(UserTeamProject::where('fk_team_project', $request->input('fk_team'))->where('fk_user', $request->input('fk_user'))->whereNull('dateCloture')->first()){
            return redirect()->route('team.viewMembers', [$team->fk_project, $team->id])->withErrors(["user créé"=>"Utilisateur déjà ajouté"]);;
            exit();
        }

        $team_user = new UserTeamProject();
        $team_user->fk_user         = $request->input('fk_user');
        $team_user->fk_team_project = $team->id;
        $team_user->dateCloture     = null;
        $team_user->save();

        return redirect()->route('team.viewMembers', [$team->fk_project, $team->id]);
        
    }

    public function deleteMember($fkTeamMember){

        $tm = UserTeamProject::find($fkTeamMember);
        $tm->dateCloture = Carbon::now();
        $tm->fk_user_cloture = Auth::user()->id;
        $tm->save();

        $team = TeamProject::find($tm->fk_team_project);
        return redirect()->route('team.viewMembers', [$team->fk_project, $tm->fk_team_project]);
    }

}
