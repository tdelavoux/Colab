<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MesProjetsController extends Controller
{
    public function execute(){
        return view('AppsViews.myprojects');
    }
}
