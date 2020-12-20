<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\DB;

class  AuthentificationController extends Controller
{
    public function execute(){
        return view('auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended('login');

    }

    public function register(){
        return view('auth.register');
    }
    

    public function login(Request $request){

        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::where('email', $request->input('email'))->first();
        $validCredentials = Hash::check($request->input('password'), $user->getAuthPassword());

        if (!$validCredentials) {
            return redirect()->intended('login')->withErrors(["Email/Password" => "L'email ou le mot de passe est incorrect"])->withInput();
        }else{
            Auth::login($user);
            return redirect()->intended('dashboard');
        }   
    }


    public function createUser(Request $request){

        $validate = $request->validate([
            'Nom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password'
        ]);

        $user = new User();
        $user->password = Hash::make( $request->input('password'));
        $user->email =  $request->input('email');
        $user->name =  $request->input('Nom');
        $user->save();
        
        return redirect()->intended('login')->with('confirmMessage', 'Compte créé avec succès');
    }

}
