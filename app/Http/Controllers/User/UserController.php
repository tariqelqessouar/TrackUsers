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
            'company_name'=>'required|min:8'
            // 'role'=>'',
            //'profile_img'=>'required'
        ]);
        $user = new User();
        $user->nomUser = $request->nomUser;
        $user->email = $request->email;
        $user->password =  \Hash::make($request->password) ;  
        $user->role=($request->role=!'null')?$request->role:'manager';
        $user->company_name = $request->company_name;
        if($request->hasFile('profile_img')){
            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/usersAvatar/',$filename);
        $user->profile_img =$filename; 
        }else{
            $user->profile_img = 'DefaultUser.png'; 
        }
        
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
        
        // if(Auth::attempt($creds)){
        //     return redirect()->route('user.home');
        // }else{
        //     return redirect()->route('user.login')->with('fail','The Email or Password is not Correct ');
        // }
         if(auth()->attempt($creds))
        {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.home');
            }else if (auth()->user()->role == 'manager') {
                return redirect()->route('user.home');
            }else{
                return redirect()->route('/');
            }
        } 
        return redirect()->route('user.login')->with('fail','The Email or Password is not Correct ');
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
    
}
