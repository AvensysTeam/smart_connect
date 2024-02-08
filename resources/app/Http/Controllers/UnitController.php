<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    //
    public function index(){
        $units = Unit::all();

        var_dump($units); die();
        return view('admin/customers');
    }
}
