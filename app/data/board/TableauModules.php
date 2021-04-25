<?php

namespace App\data\board;

use Illuminate\Database\Eloquent\Model;
use App\Data\Modules;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TableauModules extends Model
{
    protected $table = "tableau_modules";
    protected $primaryKey = null;
    public $incrementing = false;

    public static function initialiseBoardMods($fkTableau){
        $modules  = Modules::get();
        foreach($modules as $mod){
            $assoc = new TableauModules();
            $assoc->fk_tableau = $fkTableau;
            $assoc->fk_module = $mod->id;
            $assoc->visibility = 1;
            $assoc->fk_user_update = Auth::user()->id;
            $assoc->created_at = Carbon::now();
            $assoc->updated_at = Carbon::now();
            $assoc->save();
        }
    }

}
