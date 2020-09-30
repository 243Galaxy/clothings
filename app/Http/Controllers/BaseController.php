<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;

class BaseController extends Controller
{
    public function __construct()
    {
        
    }

    protected function isLoggedIn(){
        $user = Session::get('logged_user');
        if(!isset($user->id)){
            // Session::flash('warning','Please log in to proceed!');
            return false;
        }else{
            return true;
        }
    }

    public function dologout(Request $request)
    {
        Session()->flush();
        return redirect('/');
    }
}
