<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesticideReportController;
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

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit'); // Edit profil
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update'); // Update profil

    // Rute pengingat
    Route::get('/pengingat', [PesticideReportController::class, 'showReminders'])->name('pengingat');

    // Rute pelaporan
    Route::get('/pelaporan', function () {
        return view('pelaporan'); // Halaman pelaporan
    })->name('pelaporan');
    Route::post('/pelaporan', [PesticideReportController::class, 'store'])->name('pelaporan.store');

    Route::get('/petunjuk', function () {
        return view('petunjuk'); // Halaman petunjuk
    })->name('petunjuk');

    Route::get('/bookmark', function () {
        return view('bookmark'); // Halaman bookmark
    })->name('bookmark');

    Route::get('/card/{id}', function ($id) {
        // Validasi apakah ID dalam rentang 1-9
        if ($id < 1 || $id > 9) {
            abort(404); // Tampilkan halaman 404 jika ID tidak valid
        }
    
        // Return view dinamis sesuai ID
        return view("card.card{$id}-detail");
    });
    
});



Route::middleware(['auth', 'userakses:admin'])->group(function () {
    Route::get('/admin/reports', [AdminController::class, 'showReports'])->name('admin.reports');
    Route::post('/admin/reports/{id}/verify', [AdminController::class, 'verifyReport'])->name('admin.reports.verify');
});
