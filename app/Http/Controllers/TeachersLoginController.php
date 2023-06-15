<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;
use Auth;

class TeachersLoginController extends Controller
{


    public function showLoginForm()
    {
        return view('login.teachers_login');
    }

    public function teacherslogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
    //    dd((Auth::guard('employer')));
    
                        if (Auth::guard('teacherslogin')->attempt($credentials)) {
    
                            return redirect('questionscreate');
    
                        }
                        
                    else{
                        return back()->withErrors(['email' => '*Invalid credentials', 'password' => '*Invalid Credentials']);
                    }
        
    }
}
