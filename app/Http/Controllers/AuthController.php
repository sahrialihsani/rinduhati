<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
 
class AuthController extends Controller
{
 
    public function login()
    {
        return view('login');
    }  
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin/dashboard');
        }
        return Redirect::to("login_admin")->withSuccess('Oppes! You have entered invalid credentials');
    }
 
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('admin/index');
      }
       return Redirect::to("login_admin")->withSuccess('Opps! You do not have access');
    }
 
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}