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

    public function updatePic(Request $request){

        if($request->hasFile('images') && $request->file('images')->isValid()){
            $validated = $request->validate([
                'name' => 'string|max:40',
                'image' => 'mimes:jpeg,png|max:2048',
            ]);
        }

        $this->removeCurrentPicture();

        $image = $request->file('images');
        $destinationPath = env('DIRUSER');
        $name = Auth::user()->id.'.'.$image->getClientOriginalExtension();
        $image->move($destinationPath, $name);

        $user = Auth::user();
        $user->img = $name;
        $user->save();

        return redirect()->route('user.personalInfos', 'general')->with('confirmMessage', 'Profil mis à jour avec succès');
    }

    public function resetPic(){

        $this->removeCurrentPicture();
        $user = Auth::user();
        $user->img = 'defaut.png';
        $user->save();

        return redirect()->route('user.personalInfos', 'general')->with('confirmMessage', 'Profil mis à jour avec succès');

    }


    private function removeCurrentPicture(){
        if(Auth::user()->img  !== 'defaut.png' && file_exists(env('DIRUSER') . Auth::user()->img )){
            unlink(env('DIRUSER') . Auth::user()->img);
        }
    }

}
