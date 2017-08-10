<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wilaya;
use Auth;
use \Input as Input;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Les pages.page_principale');
    }
	 public function demend_de_emp()
    {
		$wilaya=Wilaya::all();
		 $arr_w=Array('wilaya'=>$wilaya);
		 
		 
		 
         return view('Les pages.demend_de_emp',$arr_w);
		 
		 
    }
	
	
	
	
	
	
	
	
	public function cv()
    {
        return view('Les pages.cv');
    }
	public function show_cv()
    {
		$show_cv=Demend_de_emp::all();
		 $arr=Array('show_cv'=>$show_cv);
		
        return view('Les pages.show_cv',$arr);
    }
	
	public function uploaded(Request $request)
    {
		if ($request->hasFile('file')){
			$filename=$request->file->getClientOriginalName();
			$request->file->storeAs('public/uploads',$filename);
			return 'لقد تم رفع الملف بنجاح';
		}else{
			
			return 'لم تقم باختيار ملف حتى الآن';
		}
		
    }
	
	public function page_principale()
    {
        return view('Les pages.page_principale');
    }
}
