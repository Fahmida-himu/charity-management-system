<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
//use Laravel\Socialite\Facades\Socialite;
use Str;
use Hash;
use Socialite;
class AuthController extends Controller
{
    public function LoginProcess(Request $request)
    {

        $data=$request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);


        if (auth()->attempt($data))
        {
            return redirect('/f');
        }
        else{

            return redirect()->back();
        }

    }

    public function Showlogin()
    {
        return view('backend.user.login');
    }

    public function github()
    {
        return Socialite::driver('github')->redirect();
    }
    public function githubRedirect()
    {
        $user=Socialite::driver('github')->user();
        dd($user);
    }
    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookRedirect()
    {
        $user=Socialite::driver('facebook')->user();
        dd($user);
    }


    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
