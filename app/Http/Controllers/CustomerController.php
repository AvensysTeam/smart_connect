<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;
use App\Language;
use App\Aven;
use App\Customer;
use App\Unit;
use App\User;
use Session; 
use Auth;
use DB;
use GuzzleHttp\Client;

class CustomerController extends Controller
{
    protected $languages;

    public function __construct(){
        $this->languages = Language::all();
    }

    public function index(){       
        $rows = $this->getRows();        
        return view('admin/avens', ['langs' => $this->languages,'rows' => $rows]);
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

    public function changeLocation(Request $req){
        $serial = DB::table('devices')->where('serial', $req->serial)->update(['location' =>  $req->location]);
        return response()->json(['status' => true]);
    }
    
    public function showByCustomer(Request $req) {
    
        
        $role_id = User::where('id' , Auth::id())->first()->role_id;
        //var_dump($role_id); die();
        if($role_id == 1){

            $users = User::where('level_up', Auth::id())->orWhere('id', Auth::id())->get();
            $user_ids = [];
            foreach($users as $user){
                array_push($user_ids, $user->id);
            }            
            $rows = DB::table('avens')->join('users', 'avens.customer_id', '=', 'users.id')
            ->join('units', 'avens.unit_id', '=', 'units.id')
            ->select('avens.id','users.company_name',  'users.id As customer_id', 'units.title As unit_title',
                 'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
            ->whereIn('avens.user_id', $user_ids)
            ->where('customer_id', $req->customer_id)
            ->get();
            
            // var_dump($rows);die();
            // return view('admin/users',['langs' => $languages, 'rows' => $rows]);
            return view("admin/customer", ['langs' => $this->languages, 'rows' => $rows, 'mode'=>'unit']);
        }

        if($role_id == 2){

            $user = User::where('id', Auth::id())->get();
            
            $rows = DB::table('avens')->join('users', 'avens.customer_id', '=', 'users.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','users.company_name', 'users.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->where('avens.user_id', $user->id)
                ->where('customer_id', $req->customer_id)
                ->get();            
                        
            // return view('admin/users',['langs' => $languages, 'rows' => $rows]);
            return view("admin/customer", ['langs' => $this->languages, 'rows' => $rows, 'mode'=>'unit']);
        }
        
        // if admin
        if($role_id == 10){
            // var_dump("here");die();
            $rows = DB::table('avens')->join('users', 'avens.customer_id', '=', 'users.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','users.company_name', 'users.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->where('customer_id', $req->customer_id)
                ->get();    
            return view("admin/customer", ['langs' => $this->languages, 'rows' => $rows, 'mode'=>'unit']);
     
        }
        
    }
    
    public function showByUnit(Request $req){
        // $languages = Language::all();
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
            $rows = DB::table('avens')->join('users', 'avens.customer_id', '=', 'users.id')
            ->join('units', 'avens.unit_id', '=', 'units.id')
            ->select('avens.id','users.company_name',  'users.id As customer_id', 'units.title As unit_title',
                 'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
            ->whereIn('avens.user_id', $user_ids)
            ->where('unit_id', $req->unit_id)
            ->get();
            
            // var_dump($rows);die();
            // return view('admin/users',['langs' => $languages, 'rows' => $rows]);
            return view("admin/customer", ['langs' => $languages, 'rows' => $rows, 'mode'=>'unit']);
        }

        if($role_id == 2){

            $user = User::where('id', Auth::id())->get();
            
            $rows = DB::table('avens')->join('users', 'avens.customer_id', '=', 'users.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','users.company_name', 'users.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->where('avens.user_id', $user->id)
                ->where('unit_id', $req->unit_id)
                ->get();            
                        
            // return view('admin/users',['langs' => $languages, 'rows' => $rows]);
            return view("admin/customer", ['langs' => $languages, 'rows' => $rows, 'mode'=>'unit']);
        }
        
        // if admin
        if($role_id == 10){
            // var_dump("here");die();
            $rows = DB::table('avens')->join('users', 'avens.customer_id', '=', 'users.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','users.company_name', 'users.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->where('unit_id', $req->unit_id)
                ->get();    
            return view("admin/customer", ['langs' => $this->languages, 'rows' => $rows, 'mode'=>'unit']);
     
        }
    }

    public function showMQTT(Request $req){
        $showDevice = true;
        $unitON = false;
        $serial = $req->serial;

        $unit = DB::table('avens')->join('units', 'avens.unit_id','=','units.id')
            ->select('avens.serial_number','units.title')
            ->where('avens.serial_number', $serial)->first();
        $timedata = Http::get('https://g5c5rcqqjl.execute-api.eu-central-1.amazonaws.com/api/rispondi?address=a0001&topic=polling');
        $dev = json_decode($timedata, true);
        $imgpath = DB::table('devices')->where('serial', $serial)->first()->imgpath ;
        return view('admin/mqtt4', ['showDevice' => $showDevice, 'unitON' => $unitON, 'langs' => $this->languages,
            'serial_number' => $serial, 'unit' => $unit->title, 'imgpath' => $imgpath, 'dev' => $dev]);
    }

    public function showChart(){
        return view('admin/chart', ['langs' => $this->languages]);
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
            $rows = DB::table('avens')->join('users', 'avens.customer_id', '=', 'users.id')
            ->join('units', 'avens.unit_id', '=', 'units.id')
            ->select('avens.id','users.company_name',  'users.id As customer_id', 'units.title As unit_title',
                 'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
            ->whereIn('avens.user_id', $user_ids)
            ->get();
            
            // var_dump($rows);die();
            // return view('admin/users',['langs' => $languages, 'rows' => $rows]);
            return $rows;
        }

        if($role_id == 2){

            $user = User::where('id', Auth::id())->get();
            
            $rows = DB::table('avens')->join('users', 'avens.customer_id', '=', 'users.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','users.company_name', 'users.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->where('avens.user_id', Auth::id())
                ->get();            
                        
            // return view('admin/users',['langs' => $languages, 'rows' => $rows]);
            return $rows;
        }
        // if admin
        if($role_id == 10){            
            $rows = DB::table('avens')->join('users', 'avens.customer_id', '=', 'users.id')
                ->join('units', 'avens.unit_id', '=', 'units.id')
                ->select('avens.id','users.company_name', 'users.id As customer_id', 'units.title As unit_title', 
                    'units.id As unit_id', 'avens.serial_number', 'avens.activation', 'avens.project')
                ->get();            
            // return view('admin/customers',['langs' => $languages, 'rows' => $rows]);
            return $rows;
        }
    }
// #######################  table  ####################
    public function general() {
        $client = new Client();
        $response = Http::get('https://g5c5rcqqjl.execute-api.eu-central-1.amazonaws.com/api/rispondi?address=a0001&topic=polling');
        $data = json_decode($response->body());
        if(is_object($data)) {
            return view('admin/datatable/general', ['langs' => $this->languages, 'rows' => $data]);
        } else {
            // Handle the case where $previousState is not an object
            return "Error: Data not in the expected format";
        }
    }

    public function advanced() {
        $client = new Client();
        $response = Http::get('https://g5c5rcqqjl.execute-api.eu-central-1.amazonaws.com/api/rispondi?address=a0001&topic=debug');
        $data = json_decode($response->body());
        if(is_object($data)) {
            return view('admin/datatable/advanced', ['langs' => $this->languages, 'rows' => $data]);
        } else {
            // Handle the case where $previousState is not an object
            return "Error: Data not in the expected format";
        }
    }

    public function modify() {
        $client = new Client();
        $response = Http::get('https://g5c5rcqqjl.execute-api.eu-central-1.amazonaws.com/api/rispondi?address=a0001&topic=eeprom');
        $data = json_decode($response->body());
        if($data !== null) {
            if(property_exists($data, 'previousState') && is_string($data->previousState)) {
                // Double decode the nested JSON string
                $previousState = json_decode($data->previousState);
    
                // Check if the nested JSON data was decoded successfully
                if($previousState !== null) {
                    return view('admin/datatable/modify', ['langs' => $this->languages, 'rows' => $previousState]);
                } else {
                    // Handle the case where $previousState is not an object
                    return "Error: Nested data not in the expected format";
                }
            } else {
                // Handle the case where the main JSON data is not in the expected format
                return "Error: Main data not in the expected format";
            }
        }
    }
// #######################  table  ####################
    public function back(){
        // var_dump("back");die();
        return Redirect::back();
    }

    public function showCustomers(){
        $users = User::all();
        // var_dump($users); die();
        return view("admin/users", [ 'customers' => $users , 'langs' => $this->languages]);
    }

    public function deleteCustomer(Request $req){
        $customer_id = $req->customer_id;

        DB::table("customers")->where('id', $customer_id)->delete();
        return redirect()->route("user.customers");
    }

    public function adminEditCustomerLevel(Request $req){
        $customer_id = $req->customer_id;
        $level1_rows = DB::table("users")->where('role_id', 1)->select('id', 'company_name')->get();

        return view("/admin/customer_level_edit", ['customer_id' => $customer_id, 
                'langs' => $this->languages, 'level1_rows' => $level1_rows]);
    }

    public function adminSaveCustomerLevel(Request $req){
        $customer_id = $req->customer_id;
        $new_level = $req->new_role_id;
        $new_level_up_id = $req->new_level_up_id;

        if($new_level == 1){
            DB::table("users")->where("id", $customer_id)->update(['role_id' => $new_level, 'level_up' => 0]);
            return redirect()->route("user.customers");
        }

        if($new_level == 2){
            DB::table("users")->where('id', $customer_id)->update(['role_id' => $new_level, 'level_up' => $new_level_up_id]);
            return redirect()->route('user.customers');
        }
    }

    public function adminShowPictures(Request $req){
        $rows = DB::table('devices')->get();
        return view("/admin/show_pictures", ['langs' => $this->languages,'rows' => $rows]);
    }

    public function adminUploadPicture(Request $request){

        $request->validate([
            'file' => 'required|file|mimes:jpeg,png|max:2048', // Example: Allow only JPEG and PNG files up to 2MB
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            // Generate a unique file name
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            // Move the uploaded file to the storage directory
            $file->storeAs('/public/uploads/immaginisito', $filename);
            
            DB::table("devices")->where('serial', $request->serial)->update(['imgpath' => $filename]);
            return Redirect::back();
        } else {
            // return 'No file uploaded.';
        }

    }
}
