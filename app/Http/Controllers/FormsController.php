<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiry;
use Validator;

use App\Http\Requests\StoreEnquiryForm;
use App\Http\Requests\StoreVendorForm;

class FormsController extends Controller
{
    public function enquiry(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'Name' => 'required|min:3|alpha',
            'Email' => 'required|email',
            'PhoneNumber' => 'required|numeric|digits:10',
            'Message' => 'required|max:500'
        ]);

        $errors = $validator->errors()->all();

        foreach($errors as $error)
        {
           echo $error;
        }
        //echo implode(" ",$validator->errors()->all());
        
        if ($validator->fails()) {
            return $validator->errors()->all();
            //return response()->json(['errors' => , 'status' => 400], 200);
        }

        if( count($errors) > 0)
        {
            return response()->json([
                'name' => 'Abigail',
                'state' => 'CA'
            ]);
        }

    	$enquiry = new Enquiry;
    	
    	$enquiry->name = $request->Name;
    	$enquiry->email = $request->Email;
    	$enquiry->phone = $request->PhoneNumber;
    	$enquiry->message = $request->Message;

        $enquiry->save();

    	return redirect('thankyou');
    }

    public function vendor(StoreVendorForm $request)
    {
        $vendor = new Vendor;
        
        $vendor->name = $request->Name;
        $vendor->email = $request->Email;
        $vendor->phone = $request->PhoneNumber;
        $vendor->pors = $request->pors;
        $vendor->companytype = $request->companytype;
        $vendor->message = $request->Message;

        $vendor->save();

    	return view('pages.thankyou');
    }
}
