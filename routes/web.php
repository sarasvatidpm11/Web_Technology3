<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('landing');

Route::get('/activities', [ActivitiesController::class, 'index'])->name('landing');

Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/complaints', function () {
//     return view('complaints');
// });

// Route::get('/announcement', function () {
//     return view('announcement');
// });
