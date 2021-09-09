<?php

namespace App\Http\Controllers;

use App\Models\GioHang;
use Illuminate\Http\Request;
use App\Models\homeSlide;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::guard('user')->user();
        
        $loaiSanPhamCha = LoaiSanPham::where('idCha', 0)->where('id', '>', 2)->where('tinhTrang', 1)->get();
        $loaiSanPhamCon = LoaiSanPham::where('idCha', '<>', 0)->where('id', '>', 2)->where('tinhTrang', 1)->get();
        $sanPham = SanPham::orderBy('loaiSanPham_id')->get();

        // dd($loaiSanPhamCha->toArray(), $loaiSanPhamCon->toArray(), $sanPham->toArray());
        $gioHang = [];
        if($user){
            $gioHang = GioHang::where('user_id', $user->id)->get();
        }
        
        return view('clientnew.index', compact('loaiSanPhamCon', 'sanPham', 'loaiSanPhamCha', 'gioHang'));
    }

    public function location(Request $request)
    {
        $userIp = $request->ip();
        $locationData = Location::get();

        dd($locationData);
    }
}
