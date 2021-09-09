<?php

namespace App\Http\Controllers;

use App\Models\GioHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GioHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sanPham = SanPham::find($request->id_sanPham);
        $user = Auth::guard('user')->user();
        // if(empty($sanPham)){
        //     return response()->json(-1);
        // } else if(empty($user)){
        //     return response()->json(0);
        // }
        if($sanPham && $user){
            $data = $request->all();

            $gioHang = GioHang::where('id_sanPham', $data['id_sanPham'])
                              ->where('user_id', $user->id)
                              ->first();
            if($gioHang){
                $gioHang->soLuong += $data['soLuong'];
                $gioHang->save();
            } else {
                $data['ten_sanPham'] = $sanPham->tenSanPham;
                $data['hinhAnh_sanPham'] = $sanPham->hinhAnh;
                $data['donGia'] = $sanPham->giaKhuyenMai;
                $data['user_id'] = $user->id;
                
                GioHang::create($data);
            }
            return response()->json(true);
        }

        return response()->json(false);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GioHang  $gioHang
     * @return \Illuminate\Http\Response
     */
    public function show(GioHang $gioHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GioHang  $gioHang
     * @return \Illuminate\Http\Response
     */
    public function edit(GioHang $gioHang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GioHang  $gioHang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GioHang $gioHang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GioHang  $gioHang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::guard('user')->user();
        if($user){
            $gioHang = GioHang::where('id', $id)
                              ->where('user_id', $user->id)
                              ->first();
            if($gioHang){
                $gioHang->delete();
                return response()->json(true);
            }
            return response()->json(false);
        }
        return response()->json(false);
    }
}
