<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class  UserProfilController extends Controller
{
    public function execute(){
        return view('AppsViews.userprofile.userprofile');
    }

    public function showPassword(){
        return view('AppsViews.userprofile.passwdInfos');
    }

    public function showNotifs(){
        return view('AppsViews.userprofile.notifisInfos');
    }
}
