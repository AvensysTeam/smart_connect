<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\User;
use Illuminate\Support\Facades\Auth;
use DateTime;


class AuthController extends Controller
{
    //
    public function showLogin(Request $req){
        return view("/auth/signup");
    }

    public function showRegister(Request $req){
        return view('/auth/login');
    }

    public function login(Request $req){
        // var_dump($req->email); die();
        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|string',
        //    // 'password' => 'required|string',
        // ]);
        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {

           // $token = md5(uniqid());
           // User::where('id', Auth::id())->update(['token' => $token]);   
            Session::put('email', $req->email);       
            Session::put('lang', 'en');  
            Session::put('user_id', Auth::id());
            return redirect('/user/dashboard');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function signup(Request $req){
       // var_dump("test"); die();
        $req->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|min:6|confirmed',

        ]);
           
        // $data = $request->all();
        $fullname = $req->first_name." ".$req->last_name;
        $data = [
            'name' => $fullname,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'created_at' => date('Y-m-d H:i:s'),
            'level_up' => 1
        ];
        $check = User::create($data);   
        if($check)
            return redirect("/login")->withSuccess('You have signed-in');
        else 
            return redirect("/signup");
    }


    public function signout(Request $request){
        auth('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('/auth/login');
        // return redirect("/login");
    }
}
