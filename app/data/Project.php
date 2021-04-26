<?php

namespace App\data;

use Illuminate\Database\Eloquent\Model;
use App\data\Team\TeamProject;
use App\data\Tableau;
use App\data\Team\TeamProjectAccessTableau;

class Project extends Model
{
    protected $table = "project";


    public static function getProjectInfos($fkProject){
        $project                = self::join('color',  'color.id', '=', 'project.fk_color')
                                        ->select('project.*', 'color.hexaCode')
                                        ->find($fkProject);

        $project->teams         = TeamProject::where('fk_project', $project->id)        
                                                ->whereNull('dateCloture')
                                                ->get();

        $project->tableaux      = Tableau::join('color',  'color.id', '=', 'tableau.fk_color')
                                            ->join('modules',  'modules.id', '=', 'tableau.fk_module_default')
                                            ->select('tableau.*', 'color.hexaCode', 'modules.libelle as moduleDefault')
                                            ->where('fk_projet', $project->id)
                                            ->whereNull('dateCloture')->get();

        foreach($project->tableaux as &$tableau){
            $tableau->access = TeamProjectAccessTableau::where('fk_tableau', $tableau->id)->where('access', 1)->pluck('fk_team_project')->toArray();
        }
        return $project;
    }
}
