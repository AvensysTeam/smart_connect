<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;

class CustomerController extends Controller
{
    //
    public function index(){
        $languages = Language::all();
        return view('admin/customers',['langs' => $languages]);
    }
    
    public function showCustomer() {
        $languages = Language::all();
        return view("admin/customer",['langs' => $languages]);
    }

    public function showMQTT(){
        $languages = Language::all();
        $showDevice = true;
        $unitON = false;
        return view('admin/mqtt4', ['showDevice' => $showDevice, 'unitON' => $unitON, 'langs' => $languages]);
    }

    public function showChart(){
        $languages = Language::all();
        return view('admin/chart', ['langs' => $languages]);
    }
}
