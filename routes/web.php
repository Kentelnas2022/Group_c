<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/user/adverts', function () {
    return view('adverts');
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/lostitem', function () {
    return view('lostitem');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});








