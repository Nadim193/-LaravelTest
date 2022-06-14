<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminhome(){
        return view('admin.home');
    }

    public function adminloginsubmit(Request $request){
        $validate = $request->validate([
            "username"=>"required|min:5|max:10",
            "lpassword"=>'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/'
            ],
        );

        if($validate){

            // $uname = Session('uname');
            // $password = Session('password');

            $admins = Admin::where('username',$request->username)
            ->where('password',$request->lpassword)
            ->first();


            if($admins){
                session()->put('user',$request->username);
                return redirect()->route('adminhome');
            }
            else{
                $error = "Username and Password Incorect. Try Again";
                return redirect()->route('login')
                ->with('error', $error);
            }
        }
    }

    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
}
