<?php

namespace App\Providers;

use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Broadcasting\BroadcastController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Broadcast::routes();
        Route::post('/broadcasting/auth', [BroadcastController::class, 'authenticate'])
            ->middleware(['web', 'checkLogin'])
            ->withoutMiddleware([VerifyCsrfToken::class]);

        require base_path('routes/channels.php');
    }
}
