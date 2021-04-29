<?php

namespace App\data\Board;

use Illuminate\Database\Eloquent\Model;
use App\data\Board\BoardModule;
use App\data\Team\TeamProject;

class Board extends Model
{
    protected $table = "board";

    public static function getBoardInfos($fkBoard){
        $board = self::join('color',  'color.id', '=', 'board.fk_color')->select('board.*', 'color.hexaCode')->find($fkBoard);
        $board->modules   = BoardModule::where('fk_board', $fkBoard)->where('visibility', 1)->pluck('fk_module')->toArray();
        $board->teams     = TeamProject::join('team_project_access_board', 'team_project_access_board.fk_team_project', '=', 'team_project.id')
                                                        ->select('team_project.*')
                                                        ->where('team_project_access_board.fk_board', $fkBoard)
                                                        ->where('team_project_access_board.access', 1)
                                                        ->get();
        return $board;
    }
}
