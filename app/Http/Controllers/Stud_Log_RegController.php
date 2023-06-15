<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;
use Auth;
use App\Models\StudentLogin;
use Hash;

class Stud_Log_RegController extends Controller
{
    
    public function studloginForm()
    {
        return view('login.students_login');
    }

    public function studnetslogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
    //    dd((Auth::guard('employer')));
    
                        if (Auth::guard('studnetslogin')->attempt($credentials)) {
    
                            return redirect('attendtest');
    
                        }
                        
                    else{
                        return back()->withErrors(['email' => '*Invalid credentials', 'password' => '*Invalid Credentials']);
                    }
        
    }


    public function studregForm()
    {
        return view('register.students_reg');
    }    



    public function studinsert(Request $request){
        
        StudentLogin::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password' =>Hash::make($request->password),
            'original_password'=> $request->password,
            'phone_number'=> $request->phone_number,
           
        ]);
           
        return redirect('attendtest');
        }
    
}
