<?php

use App\Http\Livewire\ProfileTweets;
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
    return view('auth.signup');
})->name('signup');

Route::get('/home', function (){
    return view('home');
})->middleware('auth')->name('home');

Route::post('/edit/{id}',[\App\Http\Controllers\Controller::class,'edit'])->name('edit');
Route::get('/notifications',function (){
    return view('notify');
})->name('notify')->middleware('auth');

Route::get('/profile/{id}',[\App\Http\Controllers\Controller::class,'view'])->name('profile')->middleware('auth');

Route::get('/comment/{id}',[\App\Http\Controllers\Controller::class,'comment'])->name('comment');



Route::get('/logout',\App\Http\Controllers\Auth\LogoutController::class)->name('logout');

Route::get('/login',[\App\Http\Controllers\Auth\LoginController::class,'index']);
Route::post('/register',[\App\Http\Controllers\Auth\RegisterController::class,'register'])->name('register');
Route::post('/login',[\App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');
