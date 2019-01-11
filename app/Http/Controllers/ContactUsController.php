<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;

class ContactUsController extends Controller
{

    public function contactSaveData(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'subject'=>'required',
         'message' => 'required'
         ]);
  
        ContactUS::create($request->all());
  
        return redirect()->to(app('url')->previous(). '#contact-form')->withSuccess('Thanks for contacting us!');

        // return redirect()->back()->withSuccess('Thanks for contacting us!');
    }
}
