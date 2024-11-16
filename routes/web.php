<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisController;
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
    return view('dashboard'); // Halaman awal sebelum login
});

Route::get('/about', function () {
    return view('about'); // Halaman about
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/register', [RegisController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisController::class, 'register'])->name('register.submit');

Route::middleware(['auth', 'userakses:user'])->group(function () {
    // Halaman utama untuk user
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit'); // Rute untuk edit profil
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');     // Rute untuk update profil
});


Route::middleware(['auth', 'userakses:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
});

