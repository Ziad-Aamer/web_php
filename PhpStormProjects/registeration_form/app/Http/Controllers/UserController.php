<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\User;
use Session;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->Logged_email = "";
    }
    public function signup(Request $request)
    {
        $user = new User();
        $user->name= $request->name;
        $user->password= $request->password;
        $user->email= $request->email;
        $user->age= $request->age;

        $user->save();

        return response()->json(['message'=>'user created'],200);
    }

    public function signin(Request $request)
    {
        $user = User::where('email', $request->email )->
        where('password',$request->password )->first();

        if(!$user)
        {
            return response()->json(['message'=>'wrong email or password,user not found'],404);
        }

        //remeber the user
        session(['Logged_email' => $user->email]);
        //Session::put('', );

        return response()->json(['user'=> $user ],200);
    }

    public function logout()
    {
        $email=session('Logged_email');

        if($email="" or !$email)
        {
            return response()->json(['message'=> 'already logged out' ],400);
        }
        session(['Logged_email' => ""]);

        return response()->json(['message'=> 'logged out' ],200);
    }

    public function changepass(Request $request)
    {
        $email=session('Logged_email');;
        if($email="" or !$email)
        {
            return response()->json(['message'=> 'you need to log in first' ],400);
        }

        $user = User::where('email', $email )->
        where('password',$request->password )->first();

        if(!$user)
        {
            return response()->json(['message'=>'wrong password'],404);
        }

        $user->password=$request->newpassword;
        $user->save();
        return response()->json(['message'=> 'password updated' ],200);
    }

}
