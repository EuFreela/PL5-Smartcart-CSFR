<?php

namespace Lameck\Smartcart\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Session;

class AccountController extends Controller
{
    /**
     * Account
    */
    //SIGNUP
    public function getSignup()
    {
        return view('Lameck\Smartcart::user.signup');
    }
    public function postSignup(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        Auth::login($user);
        if( Session::has('oldUrl') ):
            $oldUrl = Session::get('oldUrl');
            //Session::forget('oldUrl');
            return redirect()->to($oldUrl);            
        endif; 
        return redirect()->route('shop.index');
    }
    //SIGIN
    public function getSignin()
    {
        return view('Lameck\Smartcart::user.signin');
    }
    public function postSignin(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]))
        {
            if( Session::has('oldUrl') ):
                $oldUrl = Session::get('oldUrl');
                //Session::forget('oldUrl');
                return redirect()->to($oldUrl);            
            endif;            
            return redirect()->route('user.profile');
        }
        
        return redirect()->back()->with('flash_msg','Usuário ou senha inválidos!');
        
    }   
    //Profile
    public function getProfile()
    {
        return view('Lameck\Smartcart::user.profile');
    }
    //Logout
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('shop.index');
    }
}
