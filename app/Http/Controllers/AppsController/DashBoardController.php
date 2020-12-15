<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    public function execute(){
        return view('AppsViews.dashboard.dashboard');
    }

    public function postouille(){
        die('ok');
    }
}
