<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
     function GetUsersList(){

         $usersnumber = User::where('id', '!=', auth()->id())
          ->where('role','!=', 'admin')
          ->count();
        

        $users = User::where('id', '!=', auth()->id())
          ->where('role','!=', 'admin')
          ->simplePaginate(10);
        //  ->get();
          return view('dashboard.admin.UsersList',compact('users','usersnumber'));
     }

     function GetGridUsers(){
        $usersnumber = User::where('id', '!=', auth()->id())
          ->where('role','!=', 'admin')
          ->count();
        

        $users = User::where('id', '!=', auth()->id())
          ->where('role','!=', 'admin')
          ->simplePaginate(8);
        //  ->get();
          return view('dashboard.admin.UsersGrid',compact('users','usersnumber'));
     }

     function edit($id)
    {
        $users = User::find($id);
        return view('dashboard.admin.editUsers', compact('users'));
    }

     function update(Request $request, $id)
    {
       
        $users = User::find($id);
        $users->nomUser = $request->nomUser;
        $users->email = $request->email;
        $users->company_name = $request->company_name;
        if($request->hasFile('profile_img')){
            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/usersAvatar/',$filename);
        $users->profile_img =$filename; 
        }else{
            $users->profile_img = 'DefaultUser.png'; 
        }
        $update=$users->update();
        
        if($update){
            return redirect()->back()->with('success','User Updated Successfully');
        }else{
            return redirect()->back()->with('fail','Updating  User Failed');
        }
    }

     function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back()->with('status','User Deleted Successfully');
    }
}
