<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use App\Language;
use App\Editor;

class LangController extends Controller
{
    protected $languages;

	public function __construct(){
		$this->languages = Language::all();
	}

	public function changeLanguage($lang = null){

        session()->put('lang', $lang);
        return back();        
    }    

    public function editAuth(Request $req){
    	// $myid = Auth::id();
    	$rows = DB::table("users")->where('level_up', Auth::id())->get();
    	$editors = DB::table("editors")->join('languages', 'editors.language_code', '=', 'languages.code')
    					->join("users", 'editors.level2_id', '=', 'users.id')
    					->select("editors.id", "languages.name As language_name" , "users.company_name As company_name")
    					->where('editors.level1_id', Auth::id())->get();
    	return view('admin/langauth' , ['langs' => $this->languages, 'editors' => $editors, 'rows' => $rows]);
    }

    public function saveAuth(Request $req){

        if($req->language_code == 'none'){
            DB::table('editors')->where('level1_id', Auth::id())->delete();
            return redirect()->route("level1.edit.auth");
        }

    	// remove repeative rows
    	Editor::where("level1_id",  Auth::id())->where('level2_id', $req->editor_id)
    			->where('language_code',$req->language_code )->delete();
    	
    	$data = [
    		'level1_id' => Auth::id(),
    		'level2_id' => $req->editor_id,
    		'language_code' => $req->language_code,
    	];

    	// var_dump($data); die();

    	Editor::create($data);
    	return redirect()->route("level1.edit.auth");
    }

    public function showAll(Request $req){
        $rows = DB::table("words")->get();
        return view('admin/words',['langs' => $this->languages, 'rows' => $rows]);
    }

    public function adminUpdateWords(Request $req){

        DB::table('words')->where('id', $req->id)
            ->update(['en' => $req->en , 'de' => $req->de, 'fr' => $req->fr, 'IT' => $req->IT, 'nl' => $req->nl, 
                'DK' => $req->DK, 'S' => $req->S, 'PL' => $req->PL, 'LT' => $req->LT, 'N' => $req->N]);
        return;
    }

    public function adminAddNewWord(Request $req){
        if($req->new_word == null) return redirect()->route("admin.show.language");
        DB::table('words')->insert(['en' => $req->new_word]);
        return redirect()->route("admin.show.language");
    }

    public function editLevel2TargetWords(Request $req){
        $field  = DB::table("editors")->where('level2_id', Auth::id())->first()->language_code;
        $rows  = DB::table("words")->select('id', 'en', $field)->get();
        $lang_name = DB::table("languages")->where('code', $field)->first()->name;

        return view('admin/words_edit_level2', ['langs' => $this->languages, 'rows' => $rows, 'language_code' => $field, 'language_name' => $lang_name]);
    	// reutrn view('/')
    }

    public function level2UpdateWord(Request $req){
        DB::table("words")->where("id", $req->id)
                ->update(['en' => $req->en, $req->language_code => $req->de ]);
        // return redirect()->route("level2.edit.words");
    }

}
