<?php

namespace SpecIndia\User\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    public function index()
    {
        return view('user::auth.login');
    }

    public function login(Request $request){
        // validate data 
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // login code 
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect(env('LOGIN_SUCESS_URL'));
        }

        return redirect('login')->withError('Login details are not valid');

    }

    public function register_view()
    {
        return view('user::auth.register');
    }

    public function register(Request $request){
        // validate 
        $request->validate([
            'name'=>'required',
            'email' => 'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

        // save in users table 
        
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> \Hash::make($request->password)
        ]);

        // login user here 
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect(env('REGISTER_SUCESS_URL'));
        }

        return redirect('register')->withError('Error');


    }



    public function home(){
        return view(env('APP_URL'));
    }

     public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }
}
