<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Auth;



class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_date = Carbon::now()->format('Y-m-d');
        $Registered_today_count = User::where('created_at' ,'like' ,$current_date.'%')->count();
        $arr = Array('user' => Auth::user(),'Registered_today_count'=> $Registered_today_count, 'current_date'=> $current_date);
        return view('admin.home',$arr);
    }
    public function show_registered_today(){
        $current_date = Carbon::now()->format('Y-m-d');
        $registered_today =  User::where('created_at' ,'like' ,$current_date.'%')->paginate(10);
        $arr = Array('user'=>Auth::user(),'registered_today'=> $registered_today);
        return view('admin.admin pages.registered_today_list',$arr);
    }

}
