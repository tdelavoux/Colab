<?php

namespace App\data;

use Illuminate\Database\Eloquent\Model;
use App\data\Board\TableauModules;
use App\data\Team\TeamProject;

class Tableau extends Model
{
    protected $table = "tableau";

    public static function getTableauInfos($fkBoard){
        $tableau = self::join('color',  'color.id', '=', 'tableau.fk_color')->select('tableau.*', 'color.hexaCode')->find($fkBoard);
        $tableau->modules   = TableauModules::where('fk_tableau', $fkBoard)->where('visibility', 1)->pluck('fk_module')->toArray();
        $tableau->teams     = TeamProject::join('team_project_access_tableau', 'team_project_access_tableau.fk_team_project', '=', 'team_project.id')
                                                        ->select('team_project.*')
                                                        ->where('team_project_access_tableau.fk_tableau', $fkBoard)
                                                        ->where('team_project_access_tableau.access', 1)
                                                        ->get();
        return $tableau;
    }
}
