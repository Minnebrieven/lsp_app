<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
    	return view('login.login');
    }

    public function register()
    {
    	return view('login.register');
    }

    public function proses_login(Request $r)
    {
    	$username = $r->username;
    	$password = $r->password;

    	if(Auth::attempt(['email' => $username, 'password' => $password]) || Auth::attempt(['username' => $username, 'password' => $password]))
    	{
    		return redirect('/dashboard');
    	}
    }

    public function proses_register(Request $r)
    {
        $register = new User;
        $register->name = $r->name;
        $register->username = $r->username;
        $register->email = $r->email;
        $register->no_hp = $r->no_hp;
        $register->password = bcrypt($r->password);
        $register->save();
        return redirect('/login');
    }
}
