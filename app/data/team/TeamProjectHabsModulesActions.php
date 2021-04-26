<?php

namespace App\data\team;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Data\Modules\ModulesActions;
use Carbon\Carbon;

class TeamProjectHabsModulesActions extends Model
{
    protected $table = "team_project_habs_modules_actions";
    protected $primaryKey = null;
    public $incrementing = false;

    public static function initialiseByFkTeam($fkTeam){
        $modulesActions  = ModulesActions::get();
        foreach($modulesActions as $ma){
            $hab = new TeamProjectHabsModulesActions();
            $hab->fk_module_action = $ma->id;
            $hab->fk_team_project = $fkTeam;
            $hab->habs = 1;
            $hab->created_at = Carbon::now();
            $hab->updated_at = Carbon::now();
            $hab->fk_user_update = Auth::user()->id;
            $hab->save();
        }
    }

}
