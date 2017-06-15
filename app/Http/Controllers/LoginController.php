<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
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
			return redirect('dashboard');

		$errors = collect()->push('Email/Mobile number and password do not match!');

		return back()->withInput()->with('errors', $errors);
    }
}
