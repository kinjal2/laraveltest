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
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
});
/*Route::get('/company', function () {
   return view('company');
});*/

//Route::resource('employee','EmployeeController');
//Route::resource('company','CompanyController');


Route::group([ 'middleware' => 'auth'], function () {
   Route::resource('employee','EmployeeController');
Route::resource('company','CompanyController');
   
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('kapatel190@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});