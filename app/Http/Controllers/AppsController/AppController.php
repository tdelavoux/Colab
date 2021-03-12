<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\data\Color;
use App\User;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getColors()
    {
        $color = Color::where('active', 1)->pluck('hexaCode');
        return \json_encode($color);
    }

    public function searchUser(Request $request){
        $validate = $request->validate([
            'pattern' => 'required|min:3'
        ]);
        $users = User::where('name', 'like', '%' . $request->input('pattern') . '%')->take(15)->get();
        foreach($users as &$user){
            $user->pathFile = asset('/img/user/' . $user->img);
        }
        return \json_encode($users);
    }
}
