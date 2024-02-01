<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Language;
use App\Aven;
use App\Customer;
use App\Unit;
use App\User;
use Session; 
use Auth;
use DB;

class CustomerController extends Controller
{
    //
    public function index(){
        $languages = Language::all();
        $rows = $this->getRows();
        
        return view('admin/customers', ['langs' => $languages,'rows' => $rows]);
    }

    public function changeActivation(Request $req){
        $id = $req->id;
        $row = DB::table('avens')->where('id', $id)->first();
        if( $row->activation == 1) {
            DB::table('avens')->where('id', $id)->update(['activation' => 0]);
            return response()->json(['status' => 0]);
        } else {
            DB::table('avens')->where('id', $id)->update(['activation' => 1]);
            return response()->json(['status' => 1]);
        }
    }
    
    public function showByCustomer(Request $req) {
        $languages = Language::all();
        
        $role_id = User::where('id' , Auth::id())->first()->role_id;
        //var_dump($role_id); die();
        if($role_id == 1){

            $users = User::where('level_up', Auth::id())->orWhere('id', Auth::id())->get();
            $user_ids = [];
            foreach($users as $user){
                array_push($user_ids, $user->id);
            }            
            $rows = DB::table('avens')->join('customers', 'avens.customer_id', '=', 'customers.id')
            ->join('units', 'avens.unit_id', '=', 'units.id')
            ->select('avens.id','customers.title',  'customers.id As customer_id', 'units.title As unit_title',
                 'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
            ->whereIn('avens.user_id', $user_ids)
            ->where('customer_id', $req->customer_id)
            ->get();
            
            // var_dump($rows);die();
            // return view('admin/customers',['langs' => $languages, 'rows' => $rows]);
            return view("admin/customer", ['langs' => $languages, 'rows' => $rows, 'mode'=>'unit']);
        }

        if($role_id == 2){

            $user = User::where('id', Auth::id())->get();
            
            $rows = DB::table('avens')->join('customers', 'avens.customer_id', '=', 'customers.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','customers.title', 'customers.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->where('avens.user_id', $user->id)
                ->where('customer_id', $req->customer_id)
                ->get();            
                        
            // return view('admin/customers',['langs' => $languages, 'rows' => $rows]);
            return view("admin/customer", ['langs' => $languages, 'rows' => $rows, 'mode'=>'unit']);
        }
        
        // if admin
        if($role_id == 3){
            // var_dump("here");die();
            $rows = DB::table('avens')->join('customers', 'avens.customer_id', '=', 'customers.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','customers.title', 'customers.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->where('customer_id', $req->customer_id)
                ->get();    
            return view("admin/customer", ['langs' => $languages, 'rows' => $rows, 'mode'=>'unit']);
     
        }
        
    }
    
    public function showByUnit(Request $req){
        $languages = Language::all();
        // $rows = $this->getRows();
        // $filtered_rows = $rows->where('unit_id', $req->unit_id);
        
        $role_id = User::where('id' , Auth::id())->first()->role_id;
        //var_dump($role_id); die();
        if($role_id == 1){

            $users = User::where('level_up', Auth::id())->orWhere('id', Auth::id())->get();
            $user_ids = [];
            foreach($users as $user){
                array_push($user_ids, $user->id);
            }            
            $rows = DB::table('avens')->join('customers', 'avens.customer_id', '=', 'customers.id')
            ->join('units', 'avens.unit_id', '=', 'units.id')
            ->select('avens.id','customers.title',  'customers.id As customer_id', 'units.title As unit_title',
                 'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
            ->whereIn('avens.user_id', $user_ids)
            ->where('unit_id', $req->unit_id)
            ->get();
            
            // var_dump($rows);die();
            // return view('admin/customers',['langs' => $languages, 'rows' => $rows]);
            return view("admin/customer", ['langs' => $languages, 'rows' => $rows, 'mode'=>'unit']);
        }

        if($role_id == 2){

            $user = User::where('id', Auth::id())->get();
            
            $rows = DB::table('avens')->join('customers', 'avens.customer_id', '=', 'customers.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','customers.title', 'customers.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->where('avens.user_id', $user->id)
                ->where('unit_id', $req->unit_id)
                ->get();            
                        
            // return view('admin/customers',['langs' => $languages, 'rows' => $rows]);
            return view("admin/customer", ['langs' => $languages, 'rows' => $rows, 'mode'=>'unit']);
        }
        
        // if admin
        if($role_id == 3){
            // var_dump("here");die();
            $rows = DB::table('avens')->join('customers', 'avens.customer_id', '=', 'customers.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','customers.title', 'customers.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->where('unit_id', $req->unit_id)
                ->get();    
            return view("admin/customer", ['langs' => $languages, 'rows' => $rows, 'mode'=>'unit']);
     
        }
        
            
    }

    public function showMQTT(Request $req){
        $languages = Language::all();
        $showDevice = true;
        $unitON = false;
        $serial = $req->serial;

        $unit = DB::table('avens')->join('units', 'avens.unit_id','=','units.id')
            ->select('avens.serial_number','units.title')
            ->where('avens.serial_number', $serial)->first();
        $dev = DB::table('devices')->where('serial', $serial)->first();
        $imgpath = DB::table('devices')->where('serial', $serial)->first()->imgpath ;
        return view('admin/mqtt4', ['showDevice' => $showDevice, 'unitON' => $unitON, 'langs' => $languages,
            'serial_number' => $serial, 'unit' => $unit->title, 'imgpath' => $imgpath, 'dev' => $dev]);
    }

    public function showChart(){
        $languages = Language::all();
        return view('admin/chart', ['langs' => $languages]);
    }

    private function getRows(){
        $role_id = User::where('id' , Auth::id())->first()->role_id;
        //var_dump($role_id); die();
        if($role_id == 1){

            $users = User::where('level_up', Auth::id())->orWhere('id', Auth::id())->get();
            $user_ids = [];
            foreach($users as $user){
                array_push($user_ids, $user->id);
            }            
            $rows = DB::table('avens')->join('customers', 'avens.customer_id', '=', 'customers.id')
            ->join('units', 'avens.unit_id', '=', 'units.id')
            ->select('avens.id','customers.title',  'customers.id As customer_id', 'units.title As unit_title',
                 'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
            ->whereIn('avens.user_id', $user_ids)
            ->get();
            
            // var_dump($rows);die();
            // return view('admin/customers',['langs' => $languages, 'rows' => $rows]);
            return $rows;
        }

        if($role_id == 2){

            $user = User::where('id', Auth::id())->get();
            
            $rows = DB::table('avens')->join('customers', 'avens.customer_id', '=', 'customers.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','customers.title', 'customers.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->where('avens.user_id', Auth::id())
                ->get();            
                        
            // return view('admin/customers',['langs' => $languages, 'rows' => $rows]);
            return $rows;
        }
        // if admin
        if($role_id == 3){            
            $rows = DB::table('avens')->join('customers', 'avens.customer_id', '=', 'customers.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','customers.title', 'customers.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->get();            
            // return view('admin/customers',['langs' => $languages, 'rows' => $rows]);
            return $rows;
        }
    }

    public function back(){
        // var_dump("back");die();
        return Redirect::back();
    }
}
