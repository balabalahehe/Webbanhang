<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homeSlide;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $menu = LoaiSanPham::where('idCha', 3)->get();
        $sanPham = SanPham::orderBy('loaiSanPham_id')->get();

        // dd($menu->toArray(), $sanPham->toArray());

        return view('client.index', compact('menu', 'sanPham'));
    }

    public function location(Request $request)
    {
        $userIp = $request->ip();
        $locationData = Location::get();

        dd($locationData);
    }
}
