<?php

use App\Http\Controllers\Frontend\FrontHomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['as' => 'front.', 'prefix' => 'front', 'middleware' => ['auth:web', 'verified']], function () {

    Route::get('/', [FrontHomeController::class, 'index'])->name('dashboard');

});
Route::group(['name' => 'front.', 'prefix' => 'front'], function () {

    Route::view('login', 'frontend.auth.login')->name('login');
    Route::view('register', 'frontend.auth.register')->name('register');
    Route::view('forgot-password', 'frontend.auth.forgot-password')->name('forgot-password');

});


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__ . '/auth.php';
