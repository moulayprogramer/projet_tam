<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Crypt;

class AdminLogincontroller extends Controller
{
    public $auth;
    public function __construct()
    {

        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
       return view('auth.login-admin');
   }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function login(Request $request){

       $this->validate($request,[
            'email' =>'required|email',
            'password' => 'required|min:6'
        ]);
        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admindash'));
        }
        $email = $request->input('email');
        $password = Crypt::encryptString( $request->input('password'));
        $remember = $request->input('remember') ;


       if (Auth::guard('admin')->attempt(['email' => $email , 'password' => $password , $remember ])) {
           // if successful, then redirect to their intended location
           return redirect()->intended(route('admindash'));
       }

       // if unsuccessful, then redirect back to the login with the form data
   //    return redirect()->back()->withInput($request->only('email', 'remember'));
    /* $arr = Array('email'=> $email,'password'=>$password,'remember'=>$remember);
     return view('Les pages.test',$arr);*/
   }
   public function register(Request $request){

       if ($request->isMethod('post')){
           $this->validate($request,[
               'name' => 'required|min:4',
               'email' =>'required|email',
               'password' => 'required|min:6'
           ]);

           $admin = new Admin();
           $admin->name=$request->input('name');
           $admin->email=$request->input('email');
           $admin->password = Crypt::encryptString( $request->input('password'));
           $admin->save();
           return view('auth.login-admin');
       }

       return view('auth.register-admin');

   }

}