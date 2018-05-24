<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use Session;
class LoginController extends Controller
{
    public function login(Request $request){
    	// dd($request->all());
       if(Auth::attempt([
          'email'=> $request->email,
          'password'=>$request->password
    	]))
    	{
            $user=\App\User::where('email',$request->email)->first();
            $id=$user->id;
            Session::put('id', $id);
            if($user->is_admin()){
            	return redirect()->route('dashboard')->with('id',$id);
            }
            return redirect()->route('home')->with('id',$id);
    	}
    	else{
             return redirect('/loginfailed')->with('message','Invalid Username or Password');

            
        }

    }
     public function home()
    { 
            $id=Session::get('id');

        return view('home',compact('id'));
    }
    
    public function dashboard(){
    	 $id=Session::get('id');
    	return view('userpanel.admin',compact('id'));
    }
}
