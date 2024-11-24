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
        view()->composer('*', function ($view) {
            if (auth()->check()) {
                $currentDate = Carbon::now();

                $navbarReminders = PesticideReport::where('user_id', auth()->id())
                    ->get()
                    ->filter(function ($reminder) use ($currentDate) {
                        $reminderDate = Carbon::parse($reminder->tanggal . ' ' . $reminder->jam);
                        return $currentDate->lessThanOrEqualTo($reminderDate);
                    });

                $view->with('navbarReminders', $navbarReminders);
            } else {
                $view->with('navbarReminders', collect()); 
            }
        });
    }
}
