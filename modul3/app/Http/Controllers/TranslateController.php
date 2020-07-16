<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslateController extends Controller
{
    public function index()
    {
        $array = [
            "hello" => "xin chào",
            "mouse" => "chuột"
        ];
        if (empty($_POST["input"])) {
            $note = 'Kí tự nhập vào không hợp lệ';
            return view("dictionary", ["note" => $note]);
        } else {
            $input = $_POST["input"];
            foreach($array as $key => $value){
                if($key === $input){
                    $result = $value;
                    return view("dictionary", ["input" => $input, "result" => $result]);
                }
            }
                $result = "Không tìm thấy nghĩa từ bạn cần dịch";
                return view("dictionary", ["input" => $input, "result" => $result]);
        }
    }
}
