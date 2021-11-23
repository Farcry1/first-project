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


Route::get('home','yaController@view')->name('home1');
Route::post('home','yaController@input')->name('home2');


Route::view('welcome','welcome');



Route::get('test','LoginController@view')->name('test1');
Route::post('test','LoginController@in')->name('test2');


Route::get('user/{product}','yaController@user');


//Route::view('hello', 'hello');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::view('rt','rt');
