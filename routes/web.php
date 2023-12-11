<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



// use App\Http\Controllers\UserDetailController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
})->group(function () {
    Route::get('/resume', function () {
        return view('resume');
    })->name('resume');
});


// Route::get('user-detail/create', [UserDetailController, 'create']);
Route::get('user_detail/create','App\Http\Controllers\UserDetailController@create');

// Route::post('user-detail', [UserDetailController, 'store']);
Route::post('user_detail', 'App\Http\Controllers\UserDetailController@store');
