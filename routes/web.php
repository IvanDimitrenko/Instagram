<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers;

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

Route::get('', function () {
    return view('pages.Authentication');
})->name('authentication');

// Route::get('/authentication', function () {
//     return view('pages.Authentication');
// })->name('authentication');

Route::get('/registration', function () {
    return view('pages.Registration');
})->name('registration');

Route::get('/main', function () {
    return view('pages.Main');
})->name('main');




// Route::get('/', [AuthenticationController::class, 'root'])->name('authentication');

Route::post('/authentication_sing_in', [AuthenticationController::class, 'submit'])->name('authentication_handler');

Route::post('/registration_sing_up', [RegistrationController::class, 'submit'])->name('registration_handler');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
