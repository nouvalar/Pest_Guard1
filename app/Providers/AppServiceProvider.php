<?php

namespace App\Providers;

use App\Models\PesticideReport;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Mengambil pengingat untuk navbar di setiap view
        view()->composer('*', function ($view) {
            $currentDate = Carbon::now();
            $navbarReminders = PesticideReport::where('user_id', auth()->id()) // Filter berdasarkan user yang login
                ->get()
                ->filter(function ($reminder) use ($currentDate) {
                    $reminderDate = Carbon::parse($reminder->tanggal . ' ' . $reminder->jam);
                    return $currentDate->lessThan($reminderDate->addMinutes(1)); // Menggunakan 1 menit untuk uji coba
                });

            // Memberikan data navbarReminders ke semua view
            $view->with('navbarReminders', $navbarReminders);
        });
    }
}
