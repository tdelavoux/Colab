<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class  UserProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function execute($Tab){
        return view('AppsViews.userprofile.userprofile')->with('tab', $Tab);
    }

    public function updatePwd(Request $request){

        $validate = $request->validate([
            'oldpasswd' => 'required',
            'newpasswd' => 'required',
            'confirmpasswd' => 'required_with:newpasswd|same:newpasswd'
        ]);
        
        $validCredentials = Hash::check($request->input('oldpasswd'), Auth::user()->getAuthPassword());

        if (!$validCredentials) {
            return redirect()->route('user.personalInfos', 'access')->withErrors(["Password" => "Le mot de passe est incorrect"]);
        }else{

            $user = Auth::user();
            $user->password = Hash::make( $request->input('newpasswd'));
            $user->save();

            return redirect()->route('user.personalInfos', 'access')->with('confirmMessage', 'Mot de passe modifé avec succès');
        }   
    }

    public function updateAccount(Request $request){

        $validate = $request->validate([
            'nom' => 'required|max:250',
            'email' => 'required|max:250',
            'bio' => 'max:500'
        ]);

        $user = Auth::user();
        $user->name = $request->input('nom');
        $user->email = $request->input('email');
        $user->bio = $request->input('bio');
        $user->save();

        return redirect()->route('user.personalInfos', 'general')->with('confirmMessage', 'Informations mises à jour avec succès');
    }

}
