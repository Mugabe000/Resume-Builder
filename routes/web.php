<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResumeController;

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
    // Route::get('resume', [ResumeController::class,'index'])->name('resume')->middleware('auth');
    Route::get('resume', function () {
        return view('resume');
    })->name('resume');
});


Route::resource('user_detail', UserDetailController::class)->middleware('auth');

Route::resource('education', EducationController::class)->middleware('auth');

Route::resource('experience', ExperienceController::class)->middleware('auth');

Route::resource('skill', SkillController::class)->middleware('auth');

Route::get('/templates', [ResumeController::class,'index'])->name('templates.default')->middleware('auth');

Route::get('resume/download', [ResumeController::class,'download'])->name('resume.download')->middleware('auth');
