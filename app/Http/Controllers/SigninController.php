<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Session;

class SigninController extends BaseController
{
    public function index(Request $request)
    {
        if($request->isMethod('get'))
            return view('signin');
        elseif($request->isMethod('post')){
            $rules = [
                'email'=>'required',
                'password'=>'required'
            ];
            $validator = Validator()->make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }else{
                $e = $request->email;
                $p = md5($request->password);
                $obj = Users::whereRaw("(email = '$e' OR phone = '$e') AND password = '$p'")->get();
                if($obj && count($obj) > 0){
                    Session::put('logged_user',$obj[0]);
                    Session::save();
                	return redirect('admin/dashboard');
                }else{
                	return redirect()->back()->with('error', 'Invalid login details. Please try again.');
                }
            }
        }
    }

    public function register(Request $request)
    {
        // return view('faq');
        if($request->isMethod('get'))
            return view('register');
        elseif($request->isMethod('post')){
            $rules = [
                'fullname'=>'required',
                'phone'=>'required|unique:users,phone',
                'email'=>'required|email|unique:users,email',
                'password'=>'required',
                'cpassword'=>'required'
            ];
            $passchecked = ($request->password !== $request->cpassword);
            $validator = Validator()->make($request->all(), $rules);
            if ($validator->fails() || $passchecked) {
                if($passchecked)
                    $validator->errors()->add('password', 'The password and confirm password must be the same');
                return redirect()->back()->withInput()->withErrors($validator);
            }else{
                    $obj = new Users;
                    $obj->usertype = 1;
                    $obj->active = 1;
                    $obj->fullname = $request->fullname;
                    $obj->phone = $request->phone;
                    $obj->email = $request->email;
                    $obj->password = md5($request->password);
                    // print_r($obj);exit;
                    if($obj->save()){
                        return redirect()->back()->with('success', 'Your account has been created successfully. Please signin to continue to your dashboard.');
                    }else{
                        return redirect()->back()->with('error', 'Invalid login details. Please try again.');
                    }
                }
            }
        }
    }