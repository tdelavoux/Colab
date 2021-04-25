<?php

namespace App\data;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    protected $table = "modules";

    public static function getAll(){
        return self::orderby('id')->get();
    }
}
