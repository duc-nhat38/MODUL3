<?php

use Illuminate\Support\Facades\Route;

Route::get("formLogin", "LoginController@formLogin");

Route::post("login", "LoginController@index");
// 
Route::get('/', function () {
    return view('welcome');
});
Route::get('discount', function () {
    return view('ProductDiscountCalculator');
});
Route::post('calculator', "DiscountCalculator@index");
Route::get('dictionary', function () {
    return view('dictionary');
});
Route::post('translate', "TranslateController@index");