<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    //
    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;
        $remember = $request->remember;
        
        $login_set=['username'=>$username,'password'=>$password];
        if(!Auth::attempt($login_set)){
        
        }
        Auth::attempt($login_set);
        return redirect()->back();
    }
    public function register(Request $request){
        $username = $request->username;
        $password = $request->password;

        $name = $request->name;
        $email = $request->email;
        $check_username = User::where('username','=',$username)->count();
        if($check_username > 0){
            return redirect()->back();
        }
        User::insert([
            'name'=>$name,
            'username'=>$username,
            'email'=>$email,
            'password'=>Hash::make($password),
        ]);
        $login_set=['username'=>$username,'password'=>$password];
        Auth::attempt($login_set);

        return redirect()->back();
    }
}
