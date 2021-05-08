<?php

namespace App\data\Board;

use Illuminate\Database\Eloquent\Model;
use App\Data\Modules\Module;
use Carbon\Carbon;

class BoardModule extends Model
{
    protected $table = "board_module";
    protected $primaryKey = null;
    public $incrementing = false;

    public static function initialiseBoardMods($fkBoard){
        $modules  = Module::get();
        foreach($modules as $mod){
            $assoc = new BoardModule();
            $assoc->fk_board = $fkBoard;
            $assoc->fk_module = $mod->id;
            $assoc->visibility = 1;
            $assoc->created_at = Carbon::now();
            $assoc->updated_at = Carbon::now();
            $assoc->save();
        }
    }

}
