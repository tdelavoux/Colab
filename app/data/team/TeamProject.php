<?php

namespace App\data\team;

use Illuminate\Database\Eloquent\Model;

class TeamProject extends Model
{
    protected $table = "team_project";

    public static function getAllTeamsForUser($fkProject, $fkUser){
        $roles =  self::join('user_team_project', 'user_team_project.fk_team_project', '=', 'team_project.id')
                            ->select('team_project.name')
                            ->where('team_project.fk_project', $fkProject)
                            ->where('user_team_project.fk_user', $fkUser)
                            ->whereNull('user_team_project.dateCloture')
                            ->get();
        return $roles;
    }
}
