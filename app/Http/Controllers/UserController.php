<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use App\Language;
use App\User;


class UserController extends Controller
{

	protected $languages;

	public function __construct(){
		$this->languages = Language::all();
	}


	

}
