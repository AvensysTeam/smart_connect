<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(){
        
        return view('admin/customers');
    }
    
    public function showCustomer() {
        return view("admin/customer");
    }

    public function showMQTT(){
        $showDevice = false;
        $unitON = false;
        return view('admin/mqtt4', ['showDevice' => $showDevice, 'unitON' => $unitON]);
    }

    public function showChart(){
        return view('admin/chart');
    }
}
