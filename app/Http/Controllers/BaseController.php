<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Session;

class BaseController extends Controller
{
    public function __construct()
    {

    }

    public function dologout(Request $request)
    {
        Session()->flush();
        return redirect('/');
    }

    protected function isLoggedIn()
    {
        $user = Session::get('logged_user');
        if (!isset($user->id)) {
            // Session::flash('warning','Please log in to proceed!');
            return false;
        } else {
            return true;
        }
    }
}
