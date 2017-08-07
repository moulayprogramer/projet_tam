<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personelController extends Controller
{
    //
	
	public function personel()
    {
		//$employe=Cv::find($id);
	//	 $arr=Array('employe'=>$employe);
        return view('Les pages.personel');
    }
	
}
