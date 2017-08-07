<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use Auth;

class employesController extends Controller
{
    //
	public function employes(Request $request)
    {
		
		if($request->isMethod('post')){
		
			$newcv=new Cv();
			$newcv->nom=$request->input('nom');
			$newcv->prenom=$request->input('prenom');
			$newcv->date_de_N=$request->input('date_n');
			$newcv->etat_f=$request->input('etat_f');
			$newcv->num_t=$request->input('num_t');
			$newcv->adr=$request->input('adr');
			$newcv->pls=$request->input('khidma');
			$newcv->niveau=$request->input('niveau');
			$newcv->certafica=$request->input('chahada');
			$newcv->diplome=$request->input('nom');
			$newcv->entreprise=$request->input('nom_ch');
			$newcv->type_trav=$request->input('wadifa');
			$newcv->date_i=$request->input('bidaya');
			$newcv->date_f=$request->input('nihaya');
			$newcv->info=$request->input('info');
			$newcv->id_user=(Auth::user()->id);
			$newcv->save();
			
			}
		
		$employe=Cv::orderBy('id','desc')->paginate(5);
	
		 $arr=Array('employe'=>$employe);
			
        return view('Les pages.employes',$arr);
    }
	
	
	public function show_cv($id){
		$employe=Cv::find($id);
		 $arr=Array('employe'=>$employe);
		return view('Les pages.show_cv',$arr);
	}
	public function recherche_employes(Request $request){
        $wilaya = $request->input('wilaya');
        $niveau = $request->input('niveau');
        $domain = $request->input('domain');
        $experience = $request->input('experience');

        $arr =  Array('wilaya'=>$wilaya);

        return view('Les pages.test',$arr);

    }
}
