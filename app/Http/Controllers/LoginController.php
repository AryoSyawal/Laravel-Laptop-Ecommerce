<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public Function showloginform(){
        return view('layout.authlanding.login');
    }


    public function logintolanding($request){
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withInput($request->only('username'))->withErrors(['username' => 'Username atau password salah']);
    }

    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider){
        try{
            $user = Socialite::driver($provider)->stateless()->user();
        }catch(Exception $e){
            return redirect()->back();
        }

        $authUser = $this -> findOrCreateUser($user,$provider);


        return redirect('/landingpage');
    }

    public function findOrCreateUser($socialUser, $provider){
        $socialAccount = Users::where('social_id', $socialUser->getId)
        ->where('social_type', $provider)
        ->first();

        if($socialAccount){
            Auth()->login($socialAccount, true);
        }else{
            $user = Users::where('email', $socialUser->getEmail())->first();

            if(!$user){
                $user = Users::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'password' =>bcrypt('12345678'),
                    'social_id' => $socialUser->getId(),
                    'social_type'=> $provider
                ]);
            }
            
            return $user;
        }

    }

    public function logout(){
        return redirect('/');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/landingpage');
        }

        return redirect()->back()->with('failed', json_encode([
        'Username atau Password salah'
        ]), 200);
    }
}
