<?php

namespace App\Http\Controllers\AppsController;

use App\data\board\TableauModules;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Tableau;
use App\data\Project;
use App\data\Modules;
use App\data\Color;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class  BoardParamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($Tab, $fkBoard){

        $board      = Tableau::getTableauInfos($fkBoard);
        $modules    = array();
        if($Tab === 'mods'){$modules    = Modules::get();}
        $project    = Project::find($board['fk_projet']);
        return view('AppsViews.boards.paramsview.params')->with('tab', $Tab)->with('board', $board)->with('project', $project)->with('modules', $modules);
    }

    public function updateGeneral(Request $request){
        $validate = $request->validate([
            'libelle'       => 'required|max:100',
            'description'   => 'max:500',
            'hexaColor'     => 'required|max:10',
            'fk_board'    => 'required|exists:tableau,id'
        ]);

        //Get color
        $color = Color::where('hexaCode', $request->hexaColor)->first();

        $tableau = Tableau::find($request->input('fk_board'));
        $tableau->libelle       = $request->input('libelle');
        $tableau->description   = $request->input('description');
        $tableau->fk_color      = $color->id;
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

}
