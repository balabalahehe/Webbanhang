<?php

namespace App\Http\Controllers;

use App\Http\Requests\themMoiLoaiSanPhamRequest;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LoaiSanPham::paginate(10);
        $loaiSanPham = null;
        return view('admin.loaisanpham.index', compact('data', 'loaiSanPham'));
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
    public function store(themMoiLoaiSanPhamRequest $request)
    {
        LoaiSanPham::create([
            'tenLoaiSanPham'    => $request->tenLoaiSanPham,
            'slugLoaiSanPham'   => Str::slug($request->tenLoaiSanPham),
            'tinhTrang'         => 1,
        ]);

        toastr()->success('Thêm mới loại sản phẩm thành công');

        return redirect()->Route('indexLoaiSanPham');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiSanPham $loaiSanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loaiSanPham = LoaiSanPham::find($id);
        if(!empty($loaiSanPham)){
            $data = LoaiSanPham::paginate(10);
            return view('admin.loaisanpham.index', compact('data', 'loaiSanPham'));
        } else {
            toastr()->error('Đi đâu thế bạn???');
            return redirect()->route('indexLoaiSanPham');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function update(themMoiLoaiSanPhamRequest $request)
    {
        dd($request->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiSanPham $loaiSanPham)
    {
        //
    }
}
