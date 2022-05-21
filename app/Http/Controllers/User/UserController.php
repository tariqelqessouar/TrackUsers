<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    function create(Request $request){
        //validate inputs
        $request->validate([
            'nomUser' =>'required',
            'email' => 'required|email|unique:users,email',
            'password'=>'required|min:8|max:30',
            'confimpassword'=>'required|min:8|max:30|same:password',
            'role'=>''
        ]);
        $user = new User();
        $user->nomUser = $request->nomUser;
        $user->email = $request->email;
        $user->password =  \Hash::make($request->password) ;  
        $user->role=$request->role=!'null'?$request->role:'manager';
           
        $save=$user->save();
        
        if($save){
            return redirect()->back()->with('success','New User Added Successfully');
        }else{
            return redirect()->back()->with('fail','Adding New User Failed');
        }
    }
   
    function check(Request $request){
        //validates inputs
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password'=>'required|min:8|max:30'
        ],[
            'email.exists'=>'The email you entered does not exist :('
        ]);
        
        $creds = $request->only('email','password');
        
        if(Auth::attempt($creds)){
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','The Email or Password is not Correct ');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
    
}
