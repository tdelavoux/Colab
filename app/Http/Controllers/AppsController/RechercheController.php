<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RechercheController extends Controller
{
    public function execute(){
        return view('AppsViews.search.search');
    }
}
