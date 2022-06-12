<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function ourteams(){
        return view('ourteams');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function contactus(){
        return view('contactusus');
    }

    public function contactussubmit(Request $request){
        $validate = $request->validate([
            "email"=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'Phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'comment'=>'required'
            ],
            
        );

        if($validate){

            $success = "Successfully Sent. Please Wait our teams will contact you shortly.";
            return redirect()->route('contactus')
            ->with('success', $success);
        }
        else{
            $error = "Something is wrong try again.";
            return redirect()->route('contactus')
            ->with('success', $error);
        }
    }
}
