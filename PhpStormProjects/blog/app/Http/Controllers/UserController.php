<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User ;

class UserController extends Controller
{
    //
    public function index($id,$id2)
    {
        $users = [ '0' =>['FN2'=> 'OO',
            'LN2'=> 'MM'],
            '1' => ['FN'=> $id,
                'LN'=> $id2]];

        return $users;
    }

    public function addNewUser(Request $request)
    {
        User::create($request->all());
        return view('index',['state'=>'User Added Successfully']);
    }

    public function viewAllUsers(Request $request)
    {
        $users = User::select('name','email as Email')->get();
        return view('viewAllUsers',['users' => $users ]);
    }

    public function DeleteUser(Request $request )
    {
        DB::table('users')->where('name','=', $request->username )->delete();
        $users = DB::table('users')->get();
        return view('viewAllUsers',['users' => $users ]);
    }

    public function UpdateUser( Request $request )
    {
        if($request->email!="")
            DB::table('users')->where('name','=', $request->username )->update(['email'=> $request->email , 'name'
            => $request->name]);
        $users = DB::table('users')->get();

        return view('viewAllUsers',['users' => $users ]);
    }
}

