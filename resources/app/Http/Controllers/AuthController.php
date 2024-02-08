<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\User;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;

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

            if(Auth::user()->role_id == 10){
                Session::put("isAdmin", true);
            } else {
                Session::put("isAdmin", false);
            }

            return redirect('/user/dashboard');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function signup(Request $req){
       // var_dump($req); die();
        // $req->validate([
        //     'company_name' => 'required',
        //     'VAT' => 'required',
        //     'legal_form' => 'required',
        //     'sector_activity' => 'required',
        //     'company_size' => 'required',
        //     'contact_person_name' => 'required|unique:users',
        //     'legal_address' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6|confirmed',

        // ]);

        // if($req->password != $req->confirm_password)
        //     return redirect("/signup")->withSuccess("Password doesn't match");
           
        $data = [
            'company_name' => $req->company_name,
            'VAT' => $req->VAT,
            'legal_form' => $req->legal_form,
            'sector_activity' => $req->sector_activity,
            'company_size' => $req->company_size,
            'legal_address' => $req->legal_address,
            'operational_address' => $req->operational_address,
            'contact_person_name' => $req->contact_person_name,
            'position' => $req->position,
            'email' => $req->email,
            'mobile_phone' => $req->mobile_phone,
            'username' => $req->username,
            'password' => Hash::make($req->password),
            'accept_terms' => $req->accept_terms,
            'accept_privacy' => $req->accept_privacy,
            'created_at' => date('Y-m-d H:i:s')
        ];
        // var_dump($data); die();
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

    public function showPDF(){
        return response()->file(storage_path("app/public/pdf/SMART_DIsclaimer.pdf"));
        
        // $pdfPath = public_path('SMART_DIsclaimer.pdf');
        
        // // Check if the file exists
        // if (!file_exists($pdfPath)) {
        //     abort(404, 'PDF not found');
        // }

        // $pdf = PDF::loadFile($pdfPath);
        // return $pdf->stream();

        // $pdf = Pdf::loadView('auth\pdfterm');
        // return $pdf->download(public_path().'/assets/pdf/SMART_DIsclaimer.pdf');
    }
}
