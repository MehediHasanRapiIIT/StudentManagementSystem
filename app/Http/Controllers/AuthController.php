<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(){

        // echo Hash::make(123456);
        // die;
        return view('auth.login');
    }

    public function auth_login(Request $request){

         $auth = Auth::attempt(
            [
                'email' => $request->email, 'password' => $request->password, 'is_delete'=>0], true);
        if($auth){
            return redirect('panel/dashboard');
        }
        else{
            return redirect()->back()->with('error', 'Please enter correct email and password');
        }
    }

    public function forgot(){
        return view('auth.forgot');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
