<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    //
    public function ownProfile(){
        return view('profile');
    }

    public function index($user)
    {
        /* dd($user); */
        //dd(User::find($user));
        /* $user = User::find($user, ['username', 'name']); */ //equal to select username, name where id = $user; 
        $user = User::find($user);
        return view('profile',[
            'data' =>$user
        ]);
    }

    public function testMultiParameter($data1, $data2){
        dd($user."cur".$anjay);
        return view('profile');
    }
}
