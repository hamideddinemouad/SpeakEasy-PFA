<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;

class AuthController extends Controller
{
    //
    public function signUp(SignUpRequest $request){
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->save();
    }

    public function login(LoginRequest $request){
        $login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if($login){
            return view('welcome');
        }
        return redirect('Login')->withErrors("Incorrect Password");
    }

    public function logout(){
        Auth::logout();
        return view("welcome");
    }
}
