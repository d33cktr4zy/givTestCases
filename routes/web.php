<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

//Route::get('/','pagesController@showHome');
Route::get('caseA','caseAController@show');
Route::post('caseA', 'caseAController@process');

Route::get('caseB','caseBController@show');

Route::get('caseC','caseCController@show');

Route::get('caseD','caseDController@show');
Route::post('caseD','caseDController@process');

Route::get('caseE','caseEController@show');
Route::post('caseE', 'caseEController@process');
Route::get('about', 'pagesController@showAbout');


Route::get('testCaseA/parse/', 'caseAController@parse');


Route::get('testCaseE/reverse/{num}', 'caseEController@reverse');
Route::get('testCaseE/sumTwoNumber/{a}/{b}', 'caseEController@sumTwoNumber');

Route::get('testCaseD/{string}', 'caseDController@extractNumber');
Route::get('testCaseD/shift/{arr}', 'caseDController@shift');
