<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});


// Route::get('/home', function () {
//     return view('home');

// });

Route::get('/home', [UserController::class, 'index'])->middleware('auth')->name('home');
Route::get('/user/{following_id}/follow', [UserController::class, 'follow'])->middleware('auth')->name('follow');
Route::get('/user/{following_id}/unfollow', [UserController::class, 'unfollow'])->middleware('auth')->name('unfollow');

Route::resource('user', UserController::class);