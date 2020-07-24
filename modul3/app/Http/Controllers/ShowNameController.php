<?php

namespace App\Http\Controllers;


use App\modul3s;
use Illuminate\Http\Request;

class ShowNameController extends Controller
{
    public function index(){
        $all = modul3s::all();

        return view("showName", ["all" => $all]);
    }
}
