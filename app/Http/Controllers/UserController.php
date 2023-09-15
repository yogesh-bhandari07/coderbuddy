<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getAllUsersExceptAdmins()
    {
        // Fetch all users except those with is_admin set to true
        $users = User::where('is_admin', false)->get();

        return view('user-list', ['users' => $users]);
    }
    function loginUserDashboard($id){
        echo $id;
     
        if (Auth::user()->is_admin || session()->has('last_admin_id')){
            session()->put('last_admin_id',Auth::user()->id);
            Auth::logout();
            Auth::loginUsingId($id);
            if (Auth::user()->is_admin){
                session()->forget('last_admin_id');
            }
        }
    
        return redirect()->route('user-dashboard');

        
    }
}
