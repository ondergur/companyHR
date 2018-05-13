<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $hello = 'Hello World';

    return view('welcome', compact('hello'));
});

Route::get('/companies/', function () {

    $companies = DB::table('companies')->get();

    return view('company.index', compact('companies'));
});
//
//Route::get('/companies/{company}', function ($id) {
//
//    $company = DB::table('companies')->find($id);
//
//    dd($company);
//
//    return view('company.show', compact('company'));
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resources(['company'=>  'CompanyController']);
Route::resources(['employee'=> 'EmployeeController']);