<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;
use App\Enquiry;
use App\Vendor;
use App\Career;

class DashboardController extends Controller
{
    public function careers()
    {
    	$careers = Career::all();
    	return view('dashboard.careers',compact('careers'));
    }

    public function enquiry()
    {
    	$enquiries = Enquiry::all();
    	return view('dashboard.enquiry',compact('enquiries'));
    }

    public function vendor()
    {
    	$vendors = Vendor::all();
    	return view('dashboard.vendor',compact('vendors'));
    }

   	public function profile()
   	{
   		$user = Sentinel::getUser();
		return view('dashboard.profile')->with('user',$user);
   	}

   	public function updatePassword(Request $request)
    {
    	$this->validate($request, [
            'password' => 'required|min:8|max:255|confirmed',
        ]);
        
        $user = Sentinel::check();
        $email = $user->email;
        $credentials = [
            'email' => $user->email,
            'password' => $request->old_password,
        ];

        if (Sentinel::validateCredentials($user, $credentials)) {
            Sentinel::update($user, ['password' => $request->password]);
            Session::flash('success', 'Password Updated!');
            return redirect('profile');
        }
        else {
            $errors = collect();
            $errors->push("You entered an incorrect password!");
            return back()->withInput()->with('errors', $errors);
        }
    }

    public function viewCareer($email)
    {
    	$user = Career::where('email',$email)->first();
    	if(!$user)
    		return redirect('careersform');
    	return view('dashboard.view.career',compact('user'));
    }

    public function viewEnquiry($email)
    {
    	$user = Career::where('email',$email)->first();
    	return view('dashboard.view.enquiry',compact('user'));
    }

    public function viewVendor($email)
    {
    	$user = Career::where('email',$email)->first();
    	return view('dashboard.view.vendor',compact('user'));
    }
}
