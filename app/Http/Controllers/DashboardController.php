<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        if ($this->isLoggedIn()) {
            return view("admin/dashboard");
        } else {
            return redirect('/')->with('warning', 'Please log in to proceed!');
        }
    }

    public function logout(Request $request)
    {
        return $this->dologout($request);
    }

}
