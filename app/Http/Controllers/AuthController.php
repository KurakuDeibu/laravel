<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }

    
    public function login()
    {
        return view('auth.login');
    }

    // REGISTER - POST
    public function registerPost(Request $request){

        $validateData = $request->validate([
            'userEmail'=> 'required|email',
            'userPassword'=> 'required|min:8|confirmed',
            'userFName'=> 'required',
            'userLName'=> 'required',
            'userMName'=> 'nullable',
            'userAddress'=> 'required|string|max:255',
            'userBDay'=> 'required|date',
            'userPhoneNum'=> 'required|string|max:15',
            'userType'=> 'required|in:seller,buyer,finder',

        ]);

        $validateData['userPassword'] = bcrypt($validateData['userPassword']);

        User::create($validateData);

        return redirect('/landing-page')->route('auth.login')->with('success', 'Registered In Successfully!');

        // return redirect('/register')->with('success','You have Registered Sucessfully!');
    }
    
    // LOGIN - POST

    public function loginPost(Request $request){

        $credentials = $request->validate([
            'userEmail' => 'required',
            'userPassword'=> 'required',
        ]);

        if(auth()->attempt($credentials))
            return redirect('/')->with('success','You Have Successdully Logged in!');
        
        return back()->with('error', 'Invalid Credentials!');  
    }

    // public function logout(){
    //     auth()->logout();

    //     return redirect('/login')->with('logout','You have successfully Logged out');
    // }

    // public function profile(){
    //     return view('profile');
    // }

}
