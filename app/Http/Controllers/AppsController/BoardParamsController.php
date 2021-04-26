<?php

namespace App\Http\Controllers\AppsController;

use App\data\board\TableauModules;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Tableau;
use App\data\Project;
use App\data\Modules;
use App\data\Team\TeamProjectHabsModulesActions;
use App\data\Color;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class  BoardParamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($Tab, $fkBoard, $fkTeamProject=null){

        $board      = Tableau::getTableauInfos($fkBoard);
        if($fkTeamProject){
            $modules     = Modules::getAllWithActions($fkBoard);
            $board->habs = TeamProjectHabsModulesActions::where('fk_team_project', $fkTeamProject)->where('habs', 1)->pluck('fk_module_action')->toArray();
        }else{
            $modules     = Modules::getAll();
        }
        
        $project    = Project::find($board['fk_projet']);
        return view('AppsViews.boards.paramsview.params')
                ->with('tab', $Tab)
                ->with('board', $board)
                ->with('project', $project)
                ->with('modules', $modules)
                ->with('fkTeamProject', $fkTeamProject);
    }

    public function updateGeneral(Request $request){
        $validate = $request->validate([
            'libelle'       => 'required|max:100',
            'description'   => 'max:500',
            'hexaColor'     => 'required|max:10',
            'fk_board'    => 'required|exists:tableau,id',
            'fk_module_default'    => 'required|exists:modules,id'
        ]);

        //Get color
        $color = Color::where('hexaCode', $request->hexaColor)->first();

        $tableau = Tableau::find($request->input('fk_board'));
        $tableau->libelle           = $request->input('libelle');
        $tableau->description       = $request->input('description');
        $tableau->fk_module_default = $request->input('fk_module_default');
        $tableau->fk_color          = $color->id;
        $tableau->save();

        return redirect(url()->previous())->with('confirmMessage', 'Informations mises à jour');
    }

    public function updateVisibility(Request $request){
        $validate = $request->validate([
            'fk_module'       => 'required|exists:modules,id',
            'fk_tableau'      => 'required|exists:tableau,id',
            'visibility'      => 'required|integer|max:1|min:0',
        ]);

        TableauModules::where('fk_tableau', $request->input('fk_tableau'))
                        ->where('fk_module', $request->input('fk_module'))
                        ->update(['visibility'=> $request->input('visibility'), 'updated_at' => Carbon::now(), 'fk_user_update' => Auth::user()->id]);
        die('OK');
    }

    public function updateHabilitations(Request $request){
        $validate = $request->validate([
            'fk_ma'         => 'required|exists:modules_actions,id',
            'fk_team'       => 'required|exists:team_project,id',
            'habilitation'  => 'required|integer|max:1|min:0',
        ]);

        TeamProjectHabsModulesActions::where('fk_module_action', $request->input('fk_ma'))
                        ->where('fk_team_project', $request->input('fk_team'))
                        ->update(['habs'=> $request->input('habilitation'), 'updated_at' => Carbon::now(), 'fk_user_update' => Auth::user()->id]);
        die('OK');
    }

}
