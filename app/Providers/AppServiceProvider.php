<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\LoaiSanPham;
use App\Models\homeSlide;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $user = Auth::guard('user')->user();
        // Schema::defaultStringLength(191);
        $menuTop = LoaiSanPham::where('tinhTrang', 1)
                                ->where('is_delete', 0)
                                ->where('is_view_top', 1)
                                ->get();
        $menuLeft = LoaiSanPham::where('tinhTrang', 1)
                                ->where('is_delete', 0)
                                ->where('is_view_left', 1)
                                ->get();
        $slideMain = homeSlide::where('where_view', 1)->get();
        $sildeSub = homeSlide::where('where_view', 2)->limit(2)->get();
        view()->share('menuTop', $menuTop);
        view()->share('menuLeft', $menuLeft);
        view()->share('slideMain', $slideMain);
        view()->share('sildeSub', $sildeSub);
        view()->share('user', $user);
    }
}
