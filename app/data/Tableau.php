<?php

namespace App\data;

use Illuminate\Database\Eloquent\Model;
use App\data\Board\TableauModules;

class Tableau extends Model
{
    protected $table = "tableau";

    public static function getTableauInfos($fkBoard){
        $tableau = self::join('color',  'color.id', '=', 'tableau.fk_color')->select('tableau.*', 'color.hexaCode')->find($fkBoard);
        $tableau->modules = TableauModules::where('fk_tableau', $fkBoard)->where('visibility', 1)->pluck('fk_module')->toArray();
        return $tableau;
    }
}
