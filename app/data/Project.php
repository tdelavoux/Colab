<?php

namespace App\data;

use Illuminate\Database\Eloquent\Model;
use App\data\Team\TeamProject;
use App\data\Board\Board;
use App\data\Team\TeamProjectAccessBoard;

class Project extends Model
{
    protected $table = "project";


    public static function getProjectInfos($fkProject){
        $project                = self::leftjoin('color',  'color.id', '=', 'project.fk_color')
                                        ->select('project.*', 'color.hexaCode')
                                        ->find($fkProject);

        $project->teams         = TeamProject::where('fk_project', $project->id)        
                                                ->whereNull('dateCloture')
                                                ->get();

        $project->boards      = Board::leftjoin('color',  'color.id', '=', 'board.fk_color')
                                            ->join('module',  'module.id', '=', 'board.fk_module_default')
                                            ->select('board.*', 'color.hexaCode', 'module.libelle as moduleDefault')
                                            ->where('fk_projet', $project->id)
                                            ->whereNull('board.dateCloture')->get();

        foreach($project->boards as &$board){
            $board->access = TeamProjectAccessBoard::where('fk_board', $board->id)->where('access', 1)->pluck('fk_team_project')->toArray();
        }
        return $project;
    }
}
