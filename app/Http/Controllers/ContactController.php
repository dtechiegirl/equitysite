<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact(){
        return view('contact');
    }

    public function contactus(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|max:500',
            'message'=> 'required|max:5048',
            'phone'=> 'max:11'
          
           ]);
    
                Contact::create([
                'name'=> $request->input('name'),
                'email'=> $request->input('email'),
                'phone'=> $request->input('phone'),
                'message'=> $request->input('message'),
               
            ]);
            
            return redirect('/contact')->with('message', 'Your Message Has Been Sent Successfully!');
        
    }

    public function contactPage(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|max:500',
            'message'=> 'required|max:5048',
            'phone'=> 'max:11'
          
           ]);
    
                Contact::create([
                'name'=> $request->input('name'),
                'email'=> $request->input('email'),
                'phone'=> $request->input('phone'),
                'message'=> $request->input('message'),
               
            ]);
            
            return redirect('/')->with('message', 'Your Message Has Been Sent Successfully!');
        
    }
    public function messages(){
       $messages =  Contact::all();
       return view('messages', ['contacts'=> $messages]);
    }
}