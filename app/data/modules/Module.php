<?php

namespace App\data\Modules;

use Illuminate\Database\Eloquent\Model;
use App\data\Modules\ModuleAction;

class Module extends Model
{
    protected $table = "module";

    public static function getAll(){
        return self::orderby('id')->get();
    }

    public static function getAllWithActions($fkBoard){
        $modules =  self::orderby('id')->get();
        foreach($modules as &$mod){
            $mod->actions = ModuleAction::where('fk_module', $mod->id)->get();
        }
        return $modules;
    }
}
