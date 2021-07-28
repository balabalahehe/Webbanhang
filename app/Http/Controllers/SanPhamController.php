<?php

namespace App\Http\Controllers;

use App\Http\Requests\themMoiSanPhamRequest;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Carbon\Carbon;
class SanPhamController extends Controller
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
        $loaiSanPham = LoaiSanPham::where('tinhTrang', \App\Models\LoaiSanPham::tinhTrang_Open)->get();

        return view('admin.sanpham.create', compact('loaiSanPham'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(themMoiSanPhamRequest $request)
    {
        if($request->hasFile('hinhAnh')){
            $current_timestamp = Carbon::now()->setTimezone('Asia/Ho_Chi_Minh')->timestamp;
            $image = $request->file('hinhAnh');
            $filename = $request->slugTenSanPham . '-' .$current_timestamp . '.jpg';
            $storedPath = $image->move('images/sanPham', $filename);
        }
        $data = $request->all();
        $data['hinhAnh'] = $filename;

        SanPham::create($data);
        toastr()->success('Thêm mới sản phẩm thành công');

        return redirect()->route('viewThemSanPham');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show(SanPham $sanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(SanPham $sanPham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SanPham $sanPham)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(SanPham $sanPham)
    {
        //
    }
}
