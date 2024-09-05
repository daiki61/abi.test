<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class FormController extends Controller
{

    public function index()
    {
        return view('index');
    }


    public function confirm(Request $request)
{
  $contact = $request->only(['name', 'choosegender', 'email', 'tel', 'address', 'building', 'choosekinds', 'content']);
 return view('confirm', compact('contact'));
}

    public function store(ContactRequest $request)
{
    $contact = $request->only(['name', 'choosegender', 'email', 'tel', 'address', 'building', 'choosekinds', 'content']);
     Contact::create($contact);
     return view('thanks');

}
    public function getSignup(){
      return view('user.signup');
      
    }
}
