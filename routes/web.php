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
    return redirect('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
})->name("welcome");
Route::get('/signln', function () {
    return view('signln');
});
Route::get('/record', function () {
    return view('record');
});
Route::get('/personnel', function () {
    return view('personnel');
});
Route::get('/message', function () {
    return view('message');
});
Route::get('/communicate', function () {
    return view('communicate');
});
Route::get('/mission', function () {
    return view('mission');
});
Route::get('/board', function () {
    return view('board');
});
Route::get('/satisfaction', function () {
    return view('satisfaction');
});
Route::get('/studentboard', function () {
    return view('studentboard');
});
Route::get('/studentinformation', function () {
    return view('studentinformation');
});
Route::get('/activity', function () {
    return view('activity');
});
