<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  UserProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($Tab){
        return view('AppsViews.userprofile.userprofile')->with('tab', $Tab);
    }

}
