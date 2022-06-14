<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegistrationPageController extends Controller
{
    public function registration(){
        return View('registration');
    }

    public function registrationsubmit(Request $request){

        $validate = $request->validate([
            "uname"=>"required|min:5|max:10",
            "fname"=>"required|min:5|max:20",
            "lname"=>"required|min:5|max:20",
            "password"=>'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            "cpassword"=>'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            "email"=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'Phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            
        );

        if($validate){

           $uname = $request->uname;
           $fname = $request->fname;
           $lname = $request->lname;
           $password = $request->password;
           $email = $request->email;
           $phone = $request->Phone;


           DB::table('customers')->insert(
                array(

                    'username' => $uname,
                    'firstname' => $fname,
                    'lastname' => $lname,
                    'emailaddress' => $email,
                    'password' => $password,
                    'phone' => $phone
                )

           );

            $success = "Registraion Successfull";
            return redirect()->route('registration')
            ->with('success', $success);
        }
    }
}
