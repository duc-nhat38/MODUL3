<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function index(){
        if(isset($_GET["select"])){
            $input = $_GET["select"];
            date_default_timezone_set($input);
            $date = date("H:i:s d-m-Y");
            $place = str_replace("_", " ", $input);
            return view("timezone", ["result" => $date, "place" => $place]);
        }
    }
}
