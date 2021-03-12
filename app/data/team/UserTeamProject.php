<?php

namespace App\data\team;

use Illuminate\Database\Eloquent\Model;
use App\data\Team\TeamProject;

class UserTeamProject extends Model
{
    protected $table = "user_team_project";

    public static function getAllMemberByFkTeam($fkteam, $fkProject){

        $members =  self::join('users', 'users.id', '=', 'user_team_project.fk_user')
                            ->select('user_team_project.*', 'users.img as userImage', 'users.name as userName')
                            ->where('fk_team_project', $fkteam)
                            ->whereNull('dateCloture')
                            ->get();
        foreach($members as &$member){
            $member['roles']        = TeamProject::getAllTeamsForUser($fkProject, $member->fk_user);
        }
        return $members;
    }
}
