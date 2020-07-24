<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateEmailController extends Controller
{
    public function index(){
        return view('validateEmail');
    }
    public function check(Request $request){
        $email = $request->email;
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = "Email không hợp lệ !";
            return view("validateEmail", compact('result'));
        }else {
            $result = "Email hợp lệ !";
            return view("validateEmail", compact('result'));
        }
    }
}
