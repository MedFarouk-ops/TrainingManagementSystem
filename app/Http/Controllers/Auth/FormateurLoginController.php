<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class FormateurLoginController extends Controller
{

    public function __contruct(){
        $this->middleware('guest:formateur',['except' => ['logout']]);
    }


    public function showLoginForm(){
        return view('auth.formateur-login');
    }

    public function login(Request $request){
        // Validate the form data 
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        // attempt to log the user in
        
        if (Auth::guard('formateur')->attempt(['email' => $request->email,'password' => $request->password ] , $request->remember)){
            //if successful , then redirect  to their intended location
        
            return redirect()->intended(route('formateur.dashboard'));
        };
        
        // if unsuccessful,then redirect back to the login with the form 
        return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout()
    {
        Auth::guard('formateur')->logout();

        return redirect('/');
    }
}
