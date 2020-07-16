<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscountCalculator extends Controller
{
    public function index()
    {
        if (!empty($_POST["ListPrice"]) && !empty($_POST["DiscountPercent"])) {
            if (filter_var($_POST["ListPrice"], FILTER_VALIDATE_FLOAT) && filter_var($_POST["DiscountPercent"], FILTER_VALIDATE_FLOAT)) {
                $Description = $_POST["Description"];
                $ListPrice = $_POST["ListPrice"];
                $DiscountPercent = $_POST["DiscountPercent"];
                $DiscountAmount = $ListPrice * $DiscountPercent / 100;
                $DiscountPrice = $ListPrice - $DiscountAmount;
                return view("display-discount", ["Description" => $Description,
                 "ListPrice" => $ListPrice,
                 "DiscountPercent" => $DiscountPercent,
                 
                 "DiscountAmount" => $DiscountAmount, 
                 "DiscountPrice" =>$DiscountPrice]);
            }
        } else {
            $note = "<script>alert('Thông tin nhập vào không hợp lệ !')</script>";
            return view("ProductDiscountCalculator", ["note" => $note]);
        }
    }
}
