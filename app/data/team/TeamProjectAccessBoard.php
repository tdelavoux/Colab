<?php

namespace App\data\team;

use Illuminate\Database\Eloquent\Model;
use App\Data\Board\Board;
use App\Data\Team\TeamProject;
use Carbon\Carbon;

class TeamProjectAccessBoard extends Model
{
    protected $table = "team_project_access_board";
    protected $primaryKey = null;
    public $incrementing = false;

    public static function initialiseByFkTeam($fkProject, $fkTeam){
        $board  = Board::where('fk_projet', $fkProject)->get();
        foreach($board as $table){
            $assoc = new TeamProjectAccessBoard();
            $assoc->fk_board = $table->id;
            $assoc->fk_team_project = $fkTeam;
            $assoc->access = 1;
            $assoc->created_at = Carbon::now();
            $assoc->updated_at = Carbon::now();
            $assoc->save();
        }
    }

    public static function initialiseByFkBoard($fkProject, $fkBoard){
        $teams  = TeamProject::where('fk_project', $fkProject)->get();
        foreach($teams as $team){
            $assoc = new TeamProjectAccessBoard();
            $assoc->fk_board = $fkBoard;
            $assoc->fk_team_project = $team->id;
            $assoc->access = 1;
            $assoc->created_at = Carbon::now();
            $assoc->updated_at = Carbon::now();
            $assoc->save();
        }
    }
}
