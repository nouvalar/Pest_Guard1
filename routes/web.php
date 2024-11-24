<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesticidePetunjukController;
use App\Http\Controllers\PesticideReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisController;
use Illuminate\Http\Request;
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

// untuk function fpdf
Route::get('/admin/reports/download-pdfs', [AdminController::class, 'downloadPDF'])->name('admin.reports.download-pdf');


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

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

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

    // Routes untuk user
    Route::get('/petunjuk', [PesticidePetunjukController::class, 'index'])->name('petunjuk');
    Route::get('/petunjuk/{id}', [PesticidePetunjukController::class, 'show'])->name('petunjuk.detail');

    Route::get('/bookmark', function () {
        return view('bookmark'); // Halaman bookmark
    })->name('bookmark');

    Route::get('/petunjuk/{id}', function ($id) {
        if ($id >= 1 && $id <= 15) {
            // Arahkan ke file statis
            return view("card.card{$id}-detail");
        } else {
            // Arahkan ke data dinamis
            $petunjuk = \App\Models\PesticidePetunjuk::findOrFail($id);
            return view("card.card-detail", ['petunjuk' => $petunjuk]);
        }
    })->name('card.detail');
    

    Route::post('/mark-notifications-read', function (Request $request) {
        $readNotifications = session('notificationRead', []);
    
        // Ambil semua ID notifikasi dari navbarReminders
        $allNotifications = \App\Models\PesticideReport::where('user_id', auth()->id())->pluck('id')->toArray();
    
        // Gabungkan notifikasi baru yang belum ada di session
        session(['notificationRead' => array_unique(array_merge($readNotifications, $allNotifications))]);
    
        return response()->json(['success' => true]);
    });    
}); 

Route::middleware(['auth', 'userakses:admin'])->group(function () {
    Route::get('/admin/base', [AdminController::class, 'admin'])->name('base');
    Route::get('/admin/admin_reports', [AdminController::class, 'showReports'])->name('admin.reports');
    Route::post('/admin/admin_reports/{id}/verify', [AdminController::class, 'verifyReport'])->name('admin.reports.verify');


    Route::get('/admin/admin_petunjuk', [PesticidePetunjukController::class, 'adminIndex'])->name('admin.petunjuk.index');
    Route::get('/admin/admin_addPetunjuk', [PesticidePetunjukController::class, 'create'])->name('admin.petunjuk.create');
    Route::post('/admin/admin_petunjuk', [PesticidePetunjukController::class, 'store'])->name('admin.petunjuk.store');
    Route::get('/admin/admin_petunjuk/{id}/edit', [PesticidePetunjukController::class, 'edit'])->name('admin.petunjuk.edit');
    Route::put('/admin/admin_petunjuk/{id}', [PesticidePetunjukController::class, 'update'])->name('admin.petunjuk.update');
    Route::delete('/admin/admin_petunjuk/{id}', [PesticidePetunjukController::class, 'destroy'])->name('admin.petunjuk.destroy');    
});
