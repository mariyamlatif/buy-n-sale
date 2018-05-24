<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{    public function index()
    {
       // $user=\App\User::all();
        $user=User::Paginate(4); 
        return view('userpanel.userrec',compact('user'));
    }
    
    
}
