<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Language;

class DashboardController extends Controller
{
    //
    public function index(){
        // var_dump("ya"); die();
        $languages = Language::all();
        return view('dashboard',['langs' => $languages]);
    }

    public function changeLanguage($lang = null){

        session()->put('lang', $lang);
        return back();        
    }
}
