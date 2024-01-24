<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $userStore=new User();
        $userStore->name =$request->name;
        $userStore->email =$request->email;
        $userStore->password=bcrypt($request->password);        
        $userStore->save();
        alert()->success('Account Created Sucessfully','You can now login to Carema!');
        return view('login');
    }
    public function login(Request $request){
        $credentials=($request->except("_token"));
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return view ('welcome');
        }
        else{ 
            return view('login');
        }
    
    }
    public function logout(Request $request){
       $remove=$request->session()->flush();
        return redirect('login');
    }
   
 

}
