<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  BoardParamsController extends Controller
{
    public function execute($Tab, $fkBoard){
        return view('AppsViews.paramsview.params')->with('tab', $Tab);
    }

}