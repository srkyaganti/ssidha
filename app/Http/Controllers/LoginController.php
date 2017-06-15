<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
	public function getLogin()
	{
		return view('pages.login');
	}


    public function postLogin(Request $request)
    {
    	$this->validate($request,[
			'email' => 'required|max:255|email',
			'password' => 'required|max:255'
		]);

		$credentials = [
			'email' => $request->email,
			'password' => $request->password
		];

		$remember = false;

		if (Sentinel::authenticate($credentials, $remember))
			return redirect('careersform');

		$errors = collect()->push('Email and password do not match!');

		return back()->withInput()->with('errors', $errors);
    }

    public function logout()
	{
		Sentinel::logout();
		return redirect('/');
	}
}
