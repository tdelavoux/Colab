<?php

namespace App\data\team;

use Illuminate\Database\Eloquent\Model;
use App\Data\Tableau;
use App\Data\Team\TeamProject;
use Carbon\Carbon;

class TeamProjectAccessTableau extends Model
{
    protected $table = "team_project_access_tableau";
    protected $primaryKey = null;
    public $incrementing = false;

    public static function initialiseByFkTeam($fkProject, $fkTeam){
        $tableaux  = Tableau::where('fk_projet', $fkProject)->get();
        foreach($tableaux as $table){
            $assoc = new TeamProjectAccessTableau();
            $assoc->fk_tableau = $table->id;
            $assoc->fk_team_project = $fkTeam;
            $assoc->access = 1;
            $assoc->created_at = Carbon::now();
            $assoc->updated_at = Carbon::now();
            $assoc->save();
        }
    }

    public static function initialiseByFkTableau($fkProject, $fkTableau){
        $teams  = TeamProject::where('fk_project', $fkProject)->get();
        foreach($teams as $team){
            $assoc = new TeamProjectAccessTableau();
            $assoc->fk_tableau = $fkTableau;
            $assoc->fk_team_project = $team->id;
            $assoc->access = 1;
            $assoc->created_at = Carbon::now();
            $assoc->updated_at = Carbon::now();
            $assoc->save();
        }
    }
}
