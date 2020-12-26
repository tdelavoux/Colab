<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  BoardParamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($Tab, $fkBoard){
        return view('AppsViews.boards.paramsview.params')->with('tab', $Tab);
    }

}
