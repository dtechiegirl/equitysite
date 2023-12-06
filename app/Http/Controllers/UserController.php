<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' =>  'required|max:225',
            'email'=> 'required|unique:users|email',
            'password' => 'required|confirmed|min:6',
           
        ]);
        // dd($formFields);
    
        // dd($formFields);
        
        $formFields['password']= bcrypt($formFields['password']);
      
       User::create($formFields);
       User::where('email', $request->email)->update(['is_admin'=> '0']);
       
       $checkLogin = ($request->only('email', 'password'));
       Auth::attempt($checkLogin);
       return redirect()->route('index')->with('Message', 'Registraion Successful.');
    //    return view('dashboard.welcome')->with('Message', 'Registration Successful, proceed to login!');
    
       
    }
    public function login(){
        return view('login');
    }

    public function auth(Request $request){
        $formFields = $request->validate([
            'email'=> ['required', 'email'],
            'password'=> 'required'
        ]);

        $checkUser = User::where('email', $request->email)->first();
    
        if(Auth::attempt($formFields)){
            return redirect()->route('index')->with('Message', 'Login Successful.');
            }
          
         
        elseif(!$checkUser){
            return redirect('login')->with('message', 'incorrect email or password');
        }
        else{
            
     return back()->withErrors(['email'=>'invalid credentials'])->onlyInput('email');
        }
       return back()->withErrors(['email'=>'Invalid credentials'])->onlyInput('email', 'pasword');

}
public function logout(){
    Auth::logout();
    return redirect('/');
}
}
