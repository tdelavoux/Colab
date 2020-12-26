<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoardStatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($fkBoard)
    {
        return view('AppsViews.boards.statsView.statsboard');
    }
}
