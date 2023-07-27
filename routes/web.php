<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/profile', function () {
    return view('user.profile');
})->middleware(['auth', 'verified'])->name('profile');

Route::get('/shift/new', function() {
    return redirect(route('index'));
})->middleware('auth')->name('shift.new');



// ----------------------------------------------

Route::post('/profile/{user}/edit', [UserController::class, 'update'])->name('profile.edit');
Route::post('/profile/{user}/edit/password', [UserController::class, 'updatePassword'])->name('profile.editpass');

// ----------------------------------------------

Route::get('/', function () {
    return view('welcome');
})->name('index');

// Authentication
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/forcelogout', function() {
    Auth::logout();
    return 'Ok good bye';
});


// Send auth
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');


// -----------------------------------------------

Route::get('/privacypolicy', function() {
    return view('legal.privacypolicy');
})->name('privacypolicy');

Route::get('/termsofservice', function() {
    return view('legal.termsofservice');
})->name('termsofservice');


// -----------------------------------------------


// Email verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
