<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    // show login page
    public function login() {
        return view('admin.login');
    }

    // login user
    public function check(Request $request) {
        // validate user info
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:6'
        ]);

        $user = User::where('name','=',$request->name)->first();

        if(!$user) {
            return back()->with('fail','contact IT department for support');
        } else {
            // check psswd
            if(MD5($request->password) == $user->password) {
                $request->session()->put('LoggedUser',$user);
                return redirect('/blog')->with('message','Welcome back admin');
            } else {
                return back()->with('fail','contact IT department for support');
            }
        }
    }

    public function logout() {
        if(session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/admin/login');
        }
    }

}
