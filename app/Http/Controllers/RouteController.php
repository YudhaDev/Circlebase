<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    


class RouteController extends Controller
{

/*     public function __construct()
    {
        $this->middleware('auth');
    } */

    //
/*     public function check()
    {
        if (Auth::check()) {
            dd('ok');
        } else

            return view('auth.login');
    } */

    public function ToHome(){

        return view('home');
    }

    public function index(){
        /* dd('masuk'); */
        return view('home');
    }
}
