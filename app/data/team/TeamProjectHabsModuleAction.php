<?php

namespace App\data\team;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Data\Modules\ModuleAction;
use Carbon\Carbon;

class TeamProjectHabsModuleAction extends Model
{
    protected $table = "team_project_habs_module_action";
    protected $primaryKey = null;
    public $incrementing = false;

    public static function initialiseByFkTeam($fkTeam){
        $modulesActions  = ModuleAction::get();
        foreach($modulesActions as $ma){
            $hab = new TeamProjectHabsModuleAction();
            $hab->fk_module_action = $ma->id;
            $hab->fk_team_project = $fkTeam;
            $hab->habs = 1;
            $hab->created_at = Carbon::now();
            $hab->updated_at = Carbon::now();
            $hab->save();
        }
    }

}
