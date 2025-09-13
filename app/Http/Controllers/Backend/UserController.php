<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //

    public function my_account(){
        $data['getRecord'] = User::getSingle(Auth::user()->id);
        $data['meta_title'] = "My Account";
        return view('my_account',$data);
    }

    public function update_account(Request $request){
        $user = User::getSingle(Auth::user()->id);
        $user->name = $request->name;
        if(Auth::user()->is_admin !=3){
            $user->last_name = $request->last_name;
        }

        if(!empty($request->file('profile_pic'))){
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = date('Ymdhis').Str::random(20);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move('upload/profile/',$filename);

            $user->profile_pic = $filename;
            
        }

        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully');
    }


    public function change_password(){
        $data['meta_title'] = "Change Password";
        return view('change_password',$data);
    }

    public function update_password(Request $request){

        request()->validate([
           'old_password' => 'required', 
           'new_password' => 'required|min:6', 
           'confirm_password' => 'required|same:new_password', 
        ]);

       if($request->new_password === $request->confirm_password){
           
           $user = User::getSingle(Auth::user()->id);
           if(Hash::check($request->old_password, $user->password)){
               $user->password = Hash::make($request->new_password);
               $user->save();
               return redirect()->back()->with('success', 'Password changed successfully');
           }else{
               return redirect()->back()->with('error', 'Old Password is incorrect');
           }
       }else{
              return redirect()->back()->with('error', 'New Password does not match with Confirm Password');
       }

        
    }
}
