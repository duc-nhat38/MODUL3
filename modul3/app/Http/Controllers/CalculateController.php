<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function index(){
        return view("calculate");
    }

    public function summation(Request $request){

    }
}
