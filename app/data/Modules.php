<?php

namespace App\data;

use Illuminate\Database\Eloquent\Model;
use App\data\Modules\ModulesActions;

class Modules extends Model
{
    protected $table = "modules";

    public static function getAll(){
        return self::orderby('id')->get();
    }

    public static function getAllWithActions($fkBoard){
        $modules =  self::orderby('id')->get();
        foreach($modules as &$mod){
            $mod->actions = ModulesActions::where('fk_module', $mod->id)->get();
        }
        return $modules;
    }
}
