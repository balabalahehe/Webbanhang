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
        $loaiSanPhamCha = LoaiSanPham::where('idCha', 0)->where('id', '>', 2)->where('tinhTrang', 1)->get();
        $loaiSanPhamCon = LoaiSanPham::where('idCha', '<>', 0)->where('id', '>', 2)->where('tinhTrang', 1)->get();
        $sanPham = SanPham::orderBy('loaiSanPham_id')->get();

        // dd($loaiSanPhamCha->toArray(), $loaiSanPhamCon->toArray(), $sanPham->toArray());

        return view('client.index', compact('loaiSanPhamCon', 'sanPham', 'loaiSanPhamCha'));
    }

    public function location(Request $request)
    {
        $userIp = $request->ip();
        $locationData = Location::get();

        dd($locationData);
    }
}
