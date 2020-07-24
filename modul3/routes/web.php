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

Route::get('timezone', function () {
    return view('timezone');
});
Route::group(['prefix' => 'manager'], function () {
    Route::get('/index', "ManagerController@index")->name("manager.index");
    Route::group(["middleware" => "auth"], function () {
    Route::get('/edit_manager/{id}', "ManagerController@edit")->name("manager.edit");
    Route::patch('/update_manager/{id}', "ManagerController@update")->name("manager.update");
    Route::get('/create_manager', "ManagerController@create")->name("manager.create");
    Route::post('/store_manager', "ManagerController@store")->name("manager.store");
    Route::get('/del_manager/{id}', "ManagerController@delete")->name("manager.delete");
    });
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/validate_email', 'ValidateEmailController@index');
Route::post('/check_email', 'ValidateEmailController@check');

Route::get('/calculate', 'CalculateController@index');
Route::get('/summation', 'CalculateController@summation');