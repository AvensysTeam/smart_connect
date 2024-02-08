<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Language;


class LangController extends Controller
{
    protected $languages =  null;

    public function index(){

		$languages = Language::all();
    }

	public function __construct(){
	}

	public function changeLanguage($lang = null){

        session()->put('lang', $lang);
        return back();        
    }

    public function showAll(Request $req){
    	// $languages = Language::all();
    	return view('admin/words',['langs' => $languages]);
    }

    public function editAuth(Request $req){
    	return view('admin/langauth',['langs' => $languages]);
    }

}
