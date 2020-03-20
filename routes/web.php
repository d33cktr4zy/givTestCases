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
})->name('home');

//Route::get('/','pagesController@showHome');
Route::get('caseA','caseAController@show')->name('showCaseA');
Route::post('caseA', 'caseAController@process');

Route::get('caseB','caseBController@show')->name('showCaseB');
Route::post('caseB', 'caseBController@process');

Route::get('caseC','caseCController@show')->name('showCaseC');

Route::get('caseD','caseDController@show')->name('showCaseD');
Route::post('caseD','caseDController@process');

Route::get('caseE','caseEController@show')->name('showCaseE');
Route::post('caseE', 'caseEController@process');
Route::get('about', 'pagesController@showAbout')->name('showAbout');

Route::get('caseImp', 'caseImpControllers@show')->name('webimp');
Route::post('caseImp', 'caseImpControllers@process');

Route::get('testCaseA/parse/', 'caseAController@parse');

Route::get('testImp/1', 'caseImpControllers@commonNumbers');
Route::get('testImp/2/{num}', 'caseImpControllers@smallest');

Route::get('testCaseB/{num}', 'caseBController@lucky');


Route::get('testCaseE/reverse/{num}', 'caseEController@reverse');
Route::get('testCaseE/sumTwoNumber/{a}/{b}', 'caseEController@sumTwoNumber');

Route::get('testCaseD/{string}', 'caseDController@extractNumber');
Route::get('testCaseD/shift/{arr}', 'caseDController@shift');
