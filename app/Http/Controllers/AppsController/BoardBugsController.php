<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoardBugsController extends Controller
{
    public function execute($fkBoard)
    {
        return view('AppsViews.bugsView.bugsboard');
    }
}
